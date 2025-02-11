<template>
  <div id="app">
    <!-- Cabeçalho (opcional, se tiver um navbar) -->
    <header>
      <!-- Seu conteúdo do cabeçalho pode ir aqui, como logo ou barra de navegação -->
    </header>
    
    <!-- Área principal onde o conteúdo da página será renderizado -->
    <main>
      <router-view></router-view>
    </main>

    <!-- Rodapé fixo em todas as páginas -->
    <footer>
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
  name: 'App',
  components: {}
}
</script>

<style>
/* Reset básico para garantir que a estrutura ocupe 100% da altura da tela */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

/* O container principal ocupa 100% da altura da tela, com flexbox para manter a estrutura */
#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: center;
  color: #2c3e50;
}

/* O conteúdo principal ocupa o espaço disponível entre o cabeçalho e o rodapé */
main {
  flex: 1;
}

/* Estilo do rodapé com a cor de fundo beige */
footer {
  background-color: beige;
  padding: 20px 0;
  text-align: center;
  width: 100%;
  position: relative;
}

/* Container do rodapé */
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
</style>
