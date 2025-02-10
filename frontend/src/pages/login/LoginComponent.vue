<template>
  <div class="main">
    <div class="login-container">
      <h1 class="text-center">Login</h1>
      <form @submit.prevent="submitForm">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" v-model="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" v-model="password" required>
        </div>
        <button type="submit" class="btn btn-dark-green w-100">Login</button>
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
      password: ''
    }
  },
  methods: {
    submitForm() {
      // Lógica para processar o login
      console.log('Email:', this.email, 'Password:', this.password);
    }
  }
}
</script>

<style lang="scss" scoped>
@import './style.scss';

.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url('@/assets/images/background.jpg');
  background-size: cover;
  background-position: center;
}

.login-container {
  background-color: $beige;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
}

.btn-dark-green {
  background-color: $dark-green;
  color: white;
  border: none;
}

.btn-dark-green:hover {
  background-color: darken($dark-green, 10%);
}
</style>
