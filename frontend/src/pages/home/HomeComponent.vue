<template>
  <div class="main">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="@/assets/images/logo.png" alt="Logo" class="logo"> 
          <span class="brand-name">AliMENTE</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav text-center">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Início</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/sobre-nos">Sobre Nós</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/login">Login</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/cadastro">Inscreva-se</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/rede-social">Comunidade</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/artigos">Artigos</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header-image">
      <img src="@/assets/images/brain.jpg" alt="Cabeçalho" class="img-fluid">
      <div class="centered-message">
        <button class="subscribe-button">Inscreva-se</button>
      </div>
      <Watermelon3D />
    </div>

    <div class="purpose-section">
      <div class="purpose-content">
        <div class="purpose-box">
          <div class="purpose-text">
            <h1>Nosso Propósito</h1>
            <p>O projeto ALIMENTE tem como objetivo produzir e difundir informações científicas de qualidade sobre alimentação e nutrição. Essa iniciativa busca contribuir para a aquisição de hábitos alimentares saudáveis e combater a infodemia de desinformação que leua a práticas alimentares errôneas e potencialmente prejudiciais à saúde.</p>
            <p>Nosso compromisso é apresentar essas informações de forma acessível, objetiva e clara, contribuindo para desmistificar ideias sem fundamento científico que circulam nas redes sociais e que podem impactar negativamente a saúde das pessoas.</p>
            <p>O projeto oferece suporte nutricional para pessoas com transtornos mentais, promovendo o uso da alimentação como um fator essencial para o bem-estar emocional.</p>
            <p>Para fortalecer esse apoio, contamos com a parceria da Divisão de Atenção Estudantil em Saúde da Universidade Federal do Triângulo Mineiro (UFTM), garantindo suporte emocional e integrando a nutrição ao cuidado com a saúde mental.</p>
          </div>
        </div>
      </div>
      <div class="floating-brains">
        <ul>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
          <li><img src="@/assets/images/brainicon.png" alt="Brain Icon"></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import Watermelon3D from '@/components/Watermelon3D.vue'; // Importar o componente

export default {
  name: 'HomeComponent',
  components: {
    Watermelon3D // Registrar o componente
  }
}
</script>




<style scoped>
.main {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.navbar {
  width: 100%;
  text-align: center;
  background: beige !important;
}

.navbar-brand {
  display: flex;
  align-items: center;
}

.navbar-brand .logo {
  max-height: 60px;
  margin-right: 10px;
}

.brand-name {
  font-weight: bold;
  color: #5a3825;
  font-size: 1.5rem;
}

.navbar-nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.nav-link {
  color: #5a3825 !important;
  font-size: 1.2rem;
  padding: 12px 20px;
  margin: 5px;
  border: 2px solid transparent;
  border-radius: 8px;
  transition: background-color 0.3s, color 0.3s, border-color 0.3s, transform 0.2s;
}

.nav-link:hover {
  color: #fff !important;
  background-color: #5a3825;
  border-color: #3e261a;
  transform: scale(1.05);
}

img {
  max-width: 100%;
}

.header-image {
  width: 100vw;
  height: 100vh;
  margin: 0;
  position: relative;
  overflow: hidden;
}

.header-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.centered-message {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  z-index: 10;
}

.subscribe-button {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 1rem;
  color: white;
  background-color: #5a3825;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
}

.subscribe-button:hover {
  background-color: #3e261a;
  transform: scale(1.05);
}

.purpose-section {
  background-color: #3e261a;
  padding: 40px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  margin-bottom: 40px;
  flex-grow: 1;
}

.purpose-content {
  max-width: 1200px;
  width: 100%;
  padding: 20px;
}

.purpose-box {
  background: rgba(245, 245, 220, 0.8);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  padding: 20px;
  text-align: center;
  width: 100%;
}

.purpose-text h1 {
  font-size: 2rem;
  margin-bottom: 20px;
}

.purpose-text p {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.floating-brains {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.floating-brains ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.floating-brains li {
  position: absolute;
  display: block;
  width: 25px;
  height: 25px;
  background: url('@/assets/images/brainicon.png') no-repeat center center;
  background-size: contain;
  animation: animate 20s linear infinite;
  bottom: -150px;
}

@keyframes animate {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(-800px) rotate(360deg);
    opacity: 0;
  }
}

/* Responsividade */
@media (max-width: 768px) {
  .navbar-nav {
    flex-direction: column;
  }

  .navbar-brand .logo {
    max-height: 40px;
  }

  .brand-name {
    font-size: 1.2rem;
  }

  .nav-link {
    font-size: 1rem;
    padding: 8px 12px;
  }

  .header-image {
    height: 60vh;
  }

  .purpose-box {
    padding: 10px;
  }

  .purpose-text h1 {
    font-size: 1.5rem;
  }

  .purpose-text p {
    font-size: 1rem;
  }
}

@media (max-width: 576px) {
  .header-image {
    height: 50vh;
  }

  .centered-message {
    top: 40%;
  }

  .subscribe-button {
    font-size: 0.9rem;
    padding: 8px 16px;
  }
}
</style>
