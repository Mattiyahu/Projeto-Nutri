<template>
    <div class="layout">
      <header>
        <!-- Aqui vai seu código de Navbar -->
      </header>
  
      <!-- Conteúdo dinâmico que muda de página -->
      <main>
        <slot></slot>
      </main>
  
      <footer>
        <!-- Rodapé com links e informações -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-links">
                <li><router-link to="/termos-de-uso">Termos de Uso</router-link></li>
                <li><router-link to="/politica-de-privacidade">Política de Privacidade</router-link></li>
                <li><router-link to="/contato">Contato</router-link></li>
                <li><router-link to="/sobre-nos">Sobre Nós</router-link></li>
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
    name: 'LayoutComponent'
  };
  </script>
  
  <style scoped>
  /* Coloque seus estilos do layout e rodapé aqui */
  </style>
  