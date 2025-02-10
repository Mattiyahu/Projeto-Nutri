<template>
  <div class="main">
    <nav class="navbar navbar-expand-lg navbar-light bg-beige">
      <div class="container-fluid d-flex flex-column align-items-center">
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
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Inscreva-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Comunidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Artigos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header-image">
      <img src="@/assets/images/imagem_cabecalho.jpg" alt="Cabeçalho" class="img-fluid">
    </div>

    <div class="container mt-5 mission-values">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="animated-title">Nosso Propósito</h1>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <p>O projeto ALIMENTE tem como objetivo produzir e difundir informações científicas de qualidade sobre alimentação e nutrição. Essa iniciativa busca contribuir para a aquisição de hábitos alimentares saudáveis e combater a infodemia de desinformação que leva a práticas alimentares errôneas e potencialmente prejudiciais à saúde.</p>
          <p>Nosso compromisso é apresentar essas informações de forma acessível, objetiva e clara, contribuindo para desmistificar ideias sem fundamento científico que circulam nas redes sociais e que podem impactar negativamente a saúde das pessoas.</p>
          <p>O projeto oferece suporte nutricional para pessoas com transtornos mentais, promovendo o uso da alimentação como um fator essencial para o bem-estar emocional.</p>
          <p>Para fortalecer esse apoio, contamos com a parceria da Divisão de Atenção Estudantil em Saúde da Universidade Federal do Triângulo Mineiro (UFTM), garantindo suporte emocional e integrando a nutrição ao cuidado com a saúde mental.</p>
        </div>
        <div class="col-md-6">
          <img src="@/assets/images/cerebro_alimentos.jpg" alt="Cérebro com alimentos" class="img-fluid" style="max-width: 500px;">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomeComponent'
}
</script>

<style scoped>
.main {
  background-color: #e0d7b5;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.navbar {
  background-color: #e0d7b5;
  width: 100%;
  text-align: center;
}

.navbar-brand {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.navbar-brand .logo {
  max-height: 60px;
}

.brand-name {
  font-weight: bold;
  color: #800020;
  font-size: 1.5rem;
  margin-top: 5px;
}

.navbar-nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.nav-link {
  color: #800020 !important;
  font-size: 1.2rem;
  padding: 10px;
  transition: background-color 0.3s, border-radius 0.3s;
}

.nav-link:hover {
  color: #4b0026 !important;
  background-color: rgba(128, 0, 32, 0.1);
  border-radius: 5px;
}

.header-image {
  width: 100%;
  height: 80vh;
  overflow: hidden;
}

.header-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.mission-values {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  animation: fadeIn 1s ease-in-out;
}

.animated-title {
  font-size: 2.5rem;
  font-weight: bold;
  color: #800020;
  animation: slideIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slideIn {
  from {
    transform: translateY(-20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}
</style>
