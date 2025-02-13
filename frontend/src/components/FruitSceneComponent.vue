<template>
    <div ref="sceneContainer" class="scene-container"></div>
  </template>
  
  <script>
  import * as THREE from "three";
  import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";
  
  export default {
    mounted() {
      this.initScene();
    },
    methods: {
      initScene() {
        const container = this.$refs.sceneContainer;
  
        // Criar a cena
        const scene = new THREE.Scene();
        scene.background = new THREE.Color("#e9f5db"); // Cor de fundo nutricional
  
        // Criar a câmera
        const camera = new THREE.PerspectiveCamera(
          75,
          container.clientWidth / container.clientHeight,
          0.1,
          1000
        );
        camera.position.z = 3;
  
        // Criar renderizador
        const renderer = new THREE.WebGLRenderer({ alpha: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
  
        // Luz ambiente
        const light = new THREE.AmbientLight(0xffffff, 1);
        scene.add(light);
  
        // Carregar modelos 3D
        const loader = new GLTFLoader();
        const fruitModels = [
         
          "/assets/models/sample.glb",
        ];
  
        const fruits = [];
  
        fruitModels.forEach((model, ) => {
          loader.load(model, (gltf) => {
            const fruit = gltf.scene;
            fruit.position.set(
              Math.random() * 4 - 2, // Posição X aleatória
              Math.random() * 3 - 1.5, // Posição Y aleatória
              Math.random() * 2 - 1 // Posição Z aleatória
            );
            fruit.scale.set(0.5, 0.5, 0.5); // Reduz tamanho
            scene.add(fruit);
            fruits.push(fruit);
          });
        });
  
        // Criar evento de clique nas frutas
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();
        
        function onClick(event) {
          const rect = renderer.domElement.getBoundingClientRect();
          mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
          mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
          
          raycaster.setFromCamera(mouse, camera);
          const intersects = raycaster.intersectObjects(fruits, true);
          
          if (intersects.length > 0) {
            const selectedFruit = intersects[0].object;
            selectedFruit.position.y += 0.5; // Faz a fruta subir um pouco ao clicar
          }
        }
  
        window.addEventListener("click", onClick);
  
        // Animação
        function animate() {
          requestAnimationFrame(animate);
          
          fruits.forEach((fruit) => {
            fruit.rotation.y += 0.01; // Faz a fruta girar lentamente
          });
  
          renderer.render(scene, camera);
        }
  
        animate();
  
        // Ajustar tamanho ao redimensionar
        window.addEventListener("resize", () => {
          camera.aspect = container.clientWidth / container.clientHeight;
          camera.updateProjectionMatrix();
          renderer.setSize(container.clientWidth, container.clientHeight);
        });
      },
    },
  };
  </script>
  
  <style scoped>
  .scene-container {
    position: absolute;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
  }
  </style>
  