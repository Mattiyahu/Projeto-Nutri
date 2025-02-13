<template>
    <div ref="canvasContainer" class="canvas-container"></div>
  </template>
  
  <script>
  import * as THREE from 'three';
  import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
  import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
  
  export default {
    name: 'Brain3D',
    mounted() {
      this.initThreeJS();
    },
    methods: {
      initThreeJS() {
        // Cena, câmera e renderizador
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(
          75,
          this.$refs.canvasContainer.offsetWidth / this.$refs.canvasContainer.offsetHeight,
          0.1,
          1000
        );
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(this.$refs.canvasContainer.offsetWidth, this.$refs.canvasContainer.offsetHeight);
        this.$refs.canvasContainer.appendChild(renderer.domElement);
  
        // Controles de órbita (para movimentar o modelo)
        const controls = new OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        controls.enableRotate = false; // Desativa a rotação manual (controle apenas pelo script)
  
        // Iluminação
        const light = new THREE.DirectionalLight(0xffffff, 1);
        light.position.set(0, 1, 2);
        scene.add(light);
  
        // Carregar o modelo 3D do cérebro
        const loader = new GLTFLoader();
        let brain;
        loader.load(
          '/models/brain/brain.glb',
          (gltf) => {
            brain = gltf.scene;
            brain.scale.set(1.5, 1.5, 1.5); // Ajusta o tamanho do cérebro
            brain.position.set(0, 0, 0); // Posição inicial
            scene.add(brain);
          },
          undefined,
          (error) => console.error('Erro ao carregar o modelo:', error)
        );
  
        // Posicionamento da câmera
        camera.position.set(0, 2, 5);
  
        // Variáveis para arrastar e resetar posição
        let dragging = false;
        let lastMousePosition = { x: 0, y: 0 };
        const originalPosition = new THREE.Vector3(0, 0, 0);
  
        // Eventos de mouse para arrastar
        renderer.domElement.addEventListener('mousedown', (event) => {
          dragging = true;
          lastMousePosition.x = event.clientX;
          lastMousePosition.y = event.clientY;
        });
  
        renderer.domElement.addEventListener('mousemove', (event) => {
          if (dragging && brain) {
            const deltaX = (event.clientX - lastMousePosition.x) * 0.01;
            const deltaY = (event.clientY - lastMousePosition.y) * 0.01;
            brain.position.x += deltaX;
            brain.position.y -= deltaY;
            lastMousePosition.x = event.clientX;
            lastMousePosition.y = event.clientY;
          }
        });
  
        renderer.domElement.addEventListener('mouseup', () => {
          dragging = false;
          if (brain) {
            brain.position.copy(originalPosition); // Volta para a posição inicial
          }
        });
  
        // Animação
        const animate = () => {
          requestAnimationFrame(animate);
          controls.update();
  
          if (brain) {
            brain.rotation.y += 0.01; // Faz o cérebro girar no eixo Y
          }
  
          renderer.render(scene, camera);
        };
        animate();
  
        // Ajuste ao redimensionar a janela
        window.addEventListener('resize', () => {
          renderer.setSize(this.$refs.canvasContainer.offsetWidth, this.$refs.canvasContainer.offsetHeight);
          camera.aspect = this.$refs.canvasContainer.offsetWidth / this.$refs.canvasContainer.offsetHeight;
          camera.updateProjectionMatrix();
        });
      }
    }
  };
  </script>
  
  <style scoped>
  .canvas-container {
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
  }
  </style>
  