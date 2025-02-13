<template>
    <div ref="sceneContainer" class="scene-container"></div>
  </template>
  
  <script>
  import * as THREE from "three";
  
  export default {
    mounted() {
      this.initScene();
    },
    methods: {
      initScene() {
        const container = this.$refs.sceneContainer;
  
        // Criar cena
        const scene = new THREE.Scene();
  
        // Criar câmera
        const camera = new THREE.PerspectiveCamera(
          75,
          container.clientWidth / container.clientHeight,
          0.1,
          1000
        );
        camera.position.z = 5;
  
        // Criar renderizador
        const renderer = new THREE.WebGLRenderer({ alpha: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
  
        // Criar textura de comida
        const textureLoader = new THREE.TextureLoader();
        const foodTextures = [
          textureLoader.load("https://img.icons8.com/?size=100&id=121063&format=png"), // Maçã
          textureLoader.load("https://img.icons8.com/?size=100&id=121099&format=png"), // Banana
          textureLoader.load("https://img.icons8.com/?size=100&id=121133&format=png"), // Cenoura
        ];
  
        // Criar partículas (pontos flutuantes)
        const particles = [];
        const geometry = new THREE.PlaneGeometry(0.5, 0.5);
        for (let i = 0; i < 30; i++) {
          const material = new THREE.MeshBasicMaterial({
            map: foodTextures[Math.floor(Math.random() * foodTextures.length)],
            transparent: true,
          });
  
          const particle = new THREE.Mesh(geometry, material);
          particle.position.set(
            (Math.random() - 0.5) * 10,
            (Math.random() - 0.5) * 10,
            (Math.random() - 0.5) * 10
          );
  
          scene.add(particle);
          particles.push(particle);
        }
  
        // Função de animação
        function animate() {
          requestAnimationFrame(animate);
  
          // Movimentação suave das partículas
          particles.forEach((particle) => {
            particle.position.y -= 0.01;
            if (particle.position.y < -5) particle.position.y = 5;
          });
  
          renderer.render(scene, camera);
        }
  
        animate();
  
        // Ajustar a tela ao redimensionar
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
  