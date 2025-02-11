<template>
  <div class="container mt-4">
    <h2 class="text-center mb-4">Perguntas sobre Estilo de Vida</h2>
    <form @submit.prevent="enviarRespostas">
      <div class="mb-3">
        <label class="form-label">Você pratica atividades físicas regularmente?</label>
        <select v-model="atividadeFisica" class="form-select" required>
          <option value="">Selecione</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
          <option value="asvezes">Às vezes</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      atividadeFisica: ''
    };
  },
  methods: {
    enviarRespostas() {
      // Aqui você pode armazenar ou processar as respostas antes de redirecionar
      console.log("Resposta:", this.atividadeFisica);
      alert("Respostas enviadas com sucesso!");
      
      // Redireciona para a próxima página de hábitos alimentares
      this.$router.push('/cadastro/habitos-alimentares');
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
