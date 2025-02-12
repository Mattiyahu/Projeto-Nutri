<template>
  <div class="register">
    <h2>Cadastro</h2>

    <!-- Formulário -->
    <form @submit.prevent="handleSubmit">
      <!-- Etapa 1 -->
      <div v-if="step === 1">
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

        <div class="form-actions">
          <button type="button" class="btn-submit" @click="nextStep">Próximo</button>
        </div>
      </div>

      <!-- Etapa 2 -->
      <div v-if="step === 2">
        <div class="form-group">
          <label for="dataNascimento">Data de Nascimento</label>
          <input type="date" id="dataNascimento" v-model="form.data_nascimento" required />
        </div>

        <div class="form-group">
          <label for="altura">Altura (cm)</label>
          <input type="number" id="altura" v-model="form.altura" required placeholder="Digite sua altura" />
        </div>

        <div class="form-group">
          <label for="peso">Peso Atual (Kg)</label>
          <input type="number" id="peso" v-model="form.peso_atual" required placeholder="Digite seu peso atual" />
        </div>

        <!-- Campo de Sexo -->
        <div class="form-group">
          <label for="sexo">Sexo</label>
          <select id="sexo" v-model="form.sexo" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
          </select>
        </div>

        <div class="form-actions">
          <button type="submit" class="btn-submit">Cadastrar</button>
        </div>
      </div>
    </form>

    <!-- Botão de instalação PWA -->
    <div id="installButton" style="display: none; text-align: center;">
      <button class="btn-submit" @click="installApp">Instalar App</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'CadastroComponent',
  data() {
    return {
      step: 1, // Começa na etapa 1
      form: {
        nome: '',
        email: '',
        senha: '',
        data_nascimento: '',
        altura: '',
        peso_atual: '',
        sexo: '' // Campo adicionado para o sexo
      },
      deferredPrompt: null // Armazena o evento do PWA
    };
  },
  methods: {
    nextStep() {
      // Avança para a etapa 2
      this.step = 2;
    },

    handleSubmit() {
      if (this.step === 2) {
        // Validação dos campos
        if (!this.form.data_nascimento || !this.form.altura || !this.form.peso_atual || !this.form.sexo) {
          console.error('Erro: Preencha todos os campos obrigatórios.');
          return;
        }

        // Enviar os dados completos para o backend
        axios.post('http://localhost:8000/api/cadastro', {
          nome: this.form.nome,
          email: this.form.email,
          senha: this.form.senha,
          data_nascimento: this.form.data_nascimento,
          altura: this.form.altura,
          peso_atual: this.form.peso_atual,
          sexo: this.form.sexo
        })
        .then(response => {
          console.log('Cadastro realizado:', response.data);
          this.$router.push('/cadastro/saude-mental');  // Exemplo de redirecionamento
        })
        .catch(error => {
          if (error.response && error.response.status === 409) {
            alert('Erro: ' + error.response.data.message); // Exibe a mensagem "Usuário já existe"
          } else {
            console.error('Erro ao enviar o cadastro:', error.response || error);
          }
        });
      }
    },

    installApp() {
      // Exibe o prompt de instalação
      if (this.deferredPrompt) {
        this.deferredPrompt.prompt();
        this.deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('Usuário aceitou a instalação');
          } else {
            console.log('Usuário rejeitou a instalação');
          }
          this.deferredPrompt = null;
        });
      }
    }
  },

  mounted() {
    // Espera o componente ser montado para manipular o botão
    this.$nextTick(() => {
      window.addEventListener('beforeinstallprompt', (e) => {
        // Impede que o prompt seja mostrado automaticamente
        e.preventDefault();
        // Armazena o evento para ser acionado mais tarde
        this.deferredPrompt = e;

        // Exibe o botão de instalação
        const installBtn = document.getElementById('installButton');
        if (installBtn) {
          installBtn.style.display = 'block';
        }
      });
    });
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
