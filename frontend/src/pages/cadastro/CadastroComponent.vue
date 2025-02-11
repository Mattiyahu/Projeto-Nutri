<template>
  <div class="register">
    <h2>Cadastro</h2>

    <!-- Se a primeira parte do formulário for exibida -->
    <form @submit.prevent="handleSubmit">
      <div v-if="step === 1">
        <!-- Perguntas sobre o nome, email e senha -->
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" id="nome" v-model="form.nome" required placeholder="Digite seu nome" />
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" v-model="form.email" required placeholder="Digite seu e-mail" />
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" v-model="form.senha" required placeholder="Digite sua senha" />
        </div>

        <!-- Botão de envio para a primeira parte -->
        <div class="form-actions">
          <button type="submit" class="btn-submit">Próximo</button>
        </div>
      </div>

      <!-- Se a segunda parte do formulário for exibida -->
      <div v-if="step === 2">
        <!-- Perguntas sobre altura, peso, etc. -->
        <div class="form-group">
          <label for="dataNascimento">Data de Nascimento</label>
          <input type="date" id="dataNascimento" v-model="form.dataNascimento" required />
        </div>

        <div class="form-group">
          <label for="altura">Altura (cm)</label>
          <input type="number" id="altura" v-model="form.altura" required placeholder="Digite sua altura" />
        </div>

        <div class="form-group">
          <label for="peso">Peso Atual (Kg)</label>
          <input type="number" id="peso" v-model="form.peso" required placeholder="Digite seu peso atual" />
        </div>

        <!-- Botão para enviar a segunda parte -->
        <div class="form-actions">
          <button type="submit" class="btn-submit">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: 'CadastroComponent',
  data() {
    return {
      step: 1, // Controla qual parte do formulário deve ser exibida
      form: {
        nome: '',
        email: '',
        senha: '',
        dataNascimento: '',
        altura: '',
        peso: ''
      }
    };
  },
  methods: {
    handleSubmit() {
      // Se estiver na primeira etapa, avançar para a segunda etapa
      if (this.step === 1) {
        this.step = 2;
      } else {
        // Se estiver na segunda etapa, enviar o formulário
        console.log('Formulário enviado:', this.form);

        // Redireciona para a página de saúde mental ou outra página após o cadastro
        this.$router.push('/cadastro/saude-mental');
      }
    }
  }
};
</script>

<style scoped>
.register {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background: #f4f4f4;
  border-radius: 10px;
}

h2 {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input, select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="number"] {
  -moz-appearance: textfield;
}

.form-actions {
  text-align: center;
}

.btn-submit {
  padding: 10px 20px;
  background-color: #5a3825;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.btn-submit:hover {
  background-color: #3e261a;
}
</style>
