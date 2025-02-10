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
      <img src="@/assets/images/brain.jpg" alt="Cabeçalho" class="img-fluid">
      <div class="centered-message">
        <button class="subscribe-button">Inscreva-se</button>
      </div>
    </div>

    <div class="purpose-section">
      <div class="purpose-content">
        <div class="purpose-box">
          <div class="purpose-image">
            <img src="@/assets/images/brain.jpg" alt="Cabeça de fato" class="img-fluid">
          </div>
          <div class="purpose-text">
            <h1>Nosso Propósito</h1>
            <p>O projeto ALIMENTE tem como objetivo produzir e difundir informações científicas de qualidade sobre alimentação e nutrição. Essa iniciativa busca contribuir para a aquisição de hábitos alimentares saudáveis e combater a infodemia de desinformação que leva a práticas alimentares errôneas e potencialmente prejudiciais à saúde.</p>
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

    

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="footer-links">
              <li><a href="#">Termos de Uso</a></li>
              <li><a href="#">Política de Privacidade</a></li>
              <li><a href="#">Contato</a></li>
              <li><a href="#">Sobre Nós</a></li>
            </ul>
            <p>&copy; 2025 AliMENTE. Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'HomeComponent'
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

.header-image::after {
  display: block;
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  right: 0;
  height: 100px;
  background-image: linear-gradient(to bottom, rgba(62, 38, 26, 0) 0%, rgba(62, 38, 26, 1) 100%);
  z-index: 1;
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

.centered-message h2 {
  font-size: 2rem;
  font-weight: bold;
  color: #5a3825;
  background: rgba(255, 255, 255, 0.8);
  padding: 10px 20px;
  border-radius: 10px;
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
}

.purpose-content {
  display: flex;
  align-items: center;
  justify-content: center;
  max-width: 1200px;
  width: 100%;
}

.purpose-box {
  display: flex;
  flex-direction: row;
  align-items: center;
  background: rgba(245, 245, 220, 0.8); /* Fundo beige transparente */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra */
  border-radius: 10px;
  padding: 20px;
  text-align: center;
  width: 100%;
}

.purpose-image {
  flex: 1;
  padding: 20px;
}

.purpose-text {
  flex: 2;
  color: #5a3825;
  padding: 20px;
}

.purpose-text h1 {
  font-size: 2rem;
  margin-bottom: 20px;
}

.purpose-text p {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.purpose-icon {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  z-index: 10;
}

.zoom-brain {
  width: 100px;
  height: 100px;
  animation: zoom 10s infinite;
  position: relative;
  z-index: 15;
}

@keyframes zoom {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
  100% {
    transform: scale(1);
  }
}

.footer {
  background: beige;
  padding: 20px 0;
  text-align: center;
  width: 100%;
  position: absolute;
  bottom: 0;
}

.footer-links {
  list-style: none;
  padding: 0;
  margin: 0 0 10px 0;
}

.footer-links li {
  display: inline;
  margin: 0 10px;
}

.footer-links a {
  color: #5a3825;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #3e261a;
}

.footer p {
  color: #5a3825;
  margin: 0;
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
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
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

.floating-brains li:nth-child(1) {
  left: 86%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}

.floating-brains li:nth-child(2) {
  left: 12%;
  width: 30px;
  height: 30px;
  animation-delay: 1.5s;
  animation-duration: 10s;
}

.floating-brains li:nth-child(3) {
  left: 70%;
  width: 100px;
  height: 100px;
  animation-delay: 5.5s;
}

.floating-brains li:nth-child(4) {
  left: 42%;
  width: 150px;
  height: 150px;
  animation-delay: 0s;
  animation-duration: 15s;
}

.floating-brains li:nth-child(5) {
  left: 65%;
  width: 40px;
  height: 40px;
  animation-delay: 0s;
}

.floating-brains li:nth-child(6) {
  left: 15%;
  width: 110px;
  height: 110px;
  animation-delay: 3.5s;
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
</style>
