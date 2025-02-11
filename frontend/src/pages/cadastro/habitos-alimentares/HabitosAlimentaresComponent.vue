<template>
  <div class="container mt-4">
    <h2 class="text-center mb-4">Perguntas sobre Hábitos Alimentares</h2>
    <form @submit.prevent="enviarRespostas">
      <div class="mb-3">
        <label class="form-label">Como você descreveria sua alimentação atual?</label>
        <textarea v-model="alimentacaoAtual" class="form-control" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Você segue algum tipo de dieta específica?</label>
        <input v-model="dietaEspecifica" type="text" class="form-control" placeholder="Ex: Vegetariana, Low Carb, etc.">
      </div>

      <div class="mb-3">
        <label class="form-label">Você tem algum tipo de intolerância ou alergia alimentar?</label>
        <select v-model="temAlergia" class="form-select">
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>
      </div>

      <div v-if="temAlergia === 'sim'" class="mb-3">
        <label class="form-label">Se sim, especifique:</label>
        <input v-model="detalhesAlergia" type="text" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      alimentacaoAtual: '',
      dietaEspecifica: '',
      temAlergia: '',
      detalhesAlergia: ''
    };
  },
  methods: {
    enviarRespostas() {
      // Exibe as respostas no console para depuração
      console.log("Respostas:", {
        alimentacaoAtual: this.alimentacaoAtual,
        dietaEspecifica: this.dietaEspecifica,
        temAlergia: this.temAlergia,
        detalhesAlergia: this.temAlergia === "sim" ? this.detalhesAlergia : "Nenhuma"
      });

      // Alerta de sucesso
      alert("Respostas enviadas com sucesso!");

      // Redireciona para a página /parte2
      this.$router.push('/parte2');
    }
  }
};
</script>

<style scoped>
.container {
  max-width: 600px;
  margin: auto;
  background: #f8f9fa;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
  color: #007bff;
}
</style>
