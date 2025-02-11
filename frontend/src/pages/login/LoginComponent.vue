<template>
  <div class="main">
    <div class="login-container">
      <h1 class="text-center brand-name">Login</h1>
      <form @submit.prevent="submitForm">
        <div class="mb-3">
          <label for="email" class="form-label text-lightbrown">Endereço de Email</label>
          <input type="email" class="form-control" id="email" v-model="email" placeholder="Ex: joao@email.com" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-lightbrown">Senha</label>
          <input type="password" class="form-control" id="password" v-model="password" placeholder="Ex: ********" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember" v-model="rememberMe">
          <label class="form-check-label text-lightbrown" for="remember">
            Lembrar-me
          </label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginComponent',
  data() {
    return {
      email: '',
      password: '',
      rememberMe: false
    }
  },
  methods: {
    submitForm() {
      console.log('Email:', this.email, 'Senha:', this.password, 'Lembrar-me:', this.rememberMe);
    }
  }
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

.login-container {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
  text-align: center;
}

.brand-name {
  font-weight: bold;
  color: #5a3825;
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.btn-primary {
  background-color: #5a3825;
  color: white;
  border: 2px solid transparent;
  border-radius: 8px;
  transition: background-color 0.3s, transform 0.2s;
}

.btn-primary:hover {
  background-color: #3e261a;
  transform: scale(1.05);
}

.btn-primary:disabled {
  background-color: #ccc;
  cursor: not-allowed;
}

.form-check-input {
  border-color: #5a3825;
}

.form-check-label {
  color: #5a3825;
}

.text-lightbrown {
  color: #5c3c22; /* Um marrom claro para os textos */
}

input::placeholder {
  color: #c8a883; /* Cor mais suave e clara para o texto do placeholder */
  opacity: 1; /* Garante que a opacidade seja completamente visível */
}
</style>
