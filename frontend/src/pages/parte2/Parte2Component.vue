<template>
    <div class="container">
      <h2>Parte 2: Registro de Alimentação e Hidratação</h2>
  
      <!-- Perguntas sobre o que o usuário comeu hoje -->
      <div class="form-group">
        <label for="alimentos">O que você comeu hoje?</label>
        <textarea id="alimentos" v-model="alimentos" placeholder="Liste os alimentos consumidos no Café da manhã, Almoço, etc." rows="5"></textarea>
      </div>
  
      <div class="form-group">
        <label for="quantidade">Qual a quantidade que você comeu?</label>
        <input type="text" id="quantidade" v-model="quantidade" placeholder="Ex: 1 prato de arroz, 1 fatia de pão" />
      </div>
  
      <!-- Perguntas sobre a refeição -->
      <div class="form-group">
        <label>Qual o seu sentimento durante a refeição?</label>
        <select v-model="sentimento">
          <option value="calmo">Calmo</option>
          <option value="ansioso">Ansioso</option>
          <option value="triste">Triste</option>
          <option value="irritado">Irritado</option>
          <option value="outro">Outro</option>
        </select>
      </div>
  
      <div class="form-group">
        <label>Você sentiu que estava comendo por fome ou por questões emocionais?</label>
        <select v-model="fome">
          <option value="fome fisica">Fome física</option>
          <option value="fome emocional">Fome emocional</option>
        </select>
      </div>
  
      <div class="form-group">
        <label>Como você se sentiu após sua refeição?</label>
        <select v-model="sentimentoFinal">
          <option value="satisfeito">Satisfeito</option>
          <option value="culpado">Culpado</option>
          <option value="indiferente">Indiferente</option>
          <option value="energizado">Energizado</option>
        </select>
      </div>
  
      <!-- Perguntas sobre hidratação -->
      <div class="form-group">
        <label for="agua">Quantos de água você consumiu hoje?</label>
        <input type="text" id="agua" v-model="agua" placeholder="Ex: 2 copos" />
      </div>
  
      <div class="form-group">
        <label>Você consumiu outras bebidas, como suco, café, chá ou refrigerante hoje?</label>
        <div>
          <label><input type="radio" v-model="bebidas" value="sim" /> Sim</label>
          <label><input type="radio" v-model="bebidas" value="nao" /> Não</label>
        </div>
        <div v-if="bebidas === 'sim'">
          <label for="bebida-quantidade">Se sim, qual e em que quantidade?</label>
          <textarea v-model="bebidaDetalhe" rows="3" placeholder="Ex: 1 copo de suco, 2 xícaras de café"></textarea>
        </div>
      </div>
  
      <!-- Botão para enviar as respostas -->
      <button @click="enviarFormulario">Enviar</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        alimentos: '',
        quantidade: '',
        sentimento: '',
        fome: '',
        sentimentoFinal: '',
        agua: '',
        bebidas: '',
        bebidaDetalhe: ''
      };
    },
    methods: {
      enviarFormulario() {
        // Aqui você pode salvar ou enviar as respostas para um backend
        console.log({
          alimentos: this.alimentos,
          quantidade: this.quantidade,
          sentimento: this.sentimento,
          fome: this.fome,
          sentimentoFinal: this.sentimentoFinal,
          agua: this.agua,
          bebidas: this.bebidas,
          bebidaDetalhe: this.bebidaDetalhe
        });
  
        // Após o envio, pode redirecionar o usuário ou mostrar uma mensagem de sucesso
        this.$router.push({ name: 'NextPage' });
      }
    }
  };
  </script>
  
  <style scoped>
  .container {
    margin: 0 auto;
    padding: 20px;
    max-width: 600px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #45a049;
  }
  </style>
  