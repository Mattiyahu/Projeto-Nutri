<template>
    <div class="main">
      <div class="about-container">
        <h1 class="text-center brand-name">Sobre Nós</h1>
        <div class="container">
          <!-- Quem Somos -->
          <div class="row">
            <div class="col-md-6">
              <div class="info-box shadow-lg">
                <h2 class="text-lightbrown">Quem Somos</h2>
                <p>
                  Somos uma equipe dedicada de profissionais que se preocupam com o bem-estar e a saúde de nossos
                  usuários. Nosso objetivo é fornecer informações confiáveis e personalizadas sobre nutrição e saúde
                  mental, ajudando as pessoas a alcançarem seus objetivos de maneira equilibrada.
                </p>
                <p>
                  Com a experiência e a paixão pelo que fazemos, trabalhamos todos os dias para criar soluções
                  inovadoras que promovem a saúde e o autocuidado, acreditando que o equilíbrio entre corpo e mente é
                  fundamental para uma vida plena.
                </p>
              </div>
            </div>
  
            <!-- Nossa Missão -->
            <div class="col-md-6">
              <div class="info-box shadow-lg">
                <h2 class="text-lightbrown">Nossa Missão</h2>
                <p>
                  Nossa missão é transformar vidas, oferecendo ferramentas e informações que ajudem as pessoas a
                  melhorar seus hábitos alimentares e a cuidar da sua saúde mental. Estamos comprometidos com a
                  educação e com a criação de uma comunidade que compartilhe conhecimento e suporte mútuo.
                </p>
              </div>
            </div>
          </div>
  
          <!-- Nossa Equipe -->
          <div class="row mt-5">
            <div class="col-md-12">
              <h2 class="text-lightbrown">Nossa Equipe</h2>
              <div class="row">
                <div class="col-md-4">
                  <div class="team-member info-box shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Equipe 1" class="img-fluid rounded-circle">
                    <h4 class="mt-3">Maria Oliveira</h4>
                    <p>Nutricionista</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member info-box shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Equipe 2" class="img-fluid rounded-circle">
                    <h4 class="mt-3">Carlos Silva</h4>
                    <p>Psicólogo</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-member info-box shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Equipe 3" class="img-fluid rounded-circle">
                    <h4 class="mt-3">Ana Costa</h4>
                    <p>Coach de Bem-estar</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'AboutUsComponent'
  }
  </script>
  
  <style lang="scss" scoped>
  .main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: beige;
  }
  
  .about-container {
    background: white;
    padding: 40px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    text-align: center;
  }
  
  .brand-name {
    font-weight: bold;
    color: #5a3825;
    font-size: 2rem;
    margin-bottom: 20px;
  }
  
  .text-lightbrown {
    color: #5c3c22; /* Um marrom claro para os textos */
  }
  
  h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
  }
  
  p {
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
  }
  
  .info-box {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }
  
  .team-member {
    text-align: center;
  }
  
  .team-member img {
    width: 150px;
    height: 150px;
    object-fit: cover;
  }
  
  .team-member h4 {
    font-size: 1.1rem;
    margin-top: 15px;
    color: #5a3825;
  }
  
  .team-member p {
    font-size: 1rem;
    color: #777;
  }
  
  @media (max-width: 768px) {
    .brand-name {
      font-size: 1.8rem;
    }
    h2 {
      font-size: 1.2rem;
    }
    .team-member img {
      width: 120px;
      height: 120px;
    }
    .team-member h4 {
      font-size: 1rem;
    }
  }
  </style>
  