<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
        Perguntas sobre Saúde Mental
      </h2>

      <form @submit.prevent="submitForm" class="space-y-4">
        <!-- Diagnóstico -->
        <div>
          <label class="block font-medium text-gray-700 mb-1">Você já foi diagnosticado(a) com algum transtorno mental?</label>
          <select v-model="diagnostico" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
            <option value="" disabled>Selecione...</option>
            <option>Depressão</option>
            <option>Transtorno Bipolar</option>
            <option>Transtorno de Ansiedade Generalizada</option>
            <option>Síndrome do Pânico</option>
            <option>Fobias</option>
            <option>Transtorno do Espectro Autista</option>
            <option>Déficit de Atenção e Hiperatividade</option>
            <option>Bulimia</option>
            <option>Anorexia</option>
            <option>Transtorno da Compulsão Alimentar Periódica</option>
          </select>
        </div>

        <!-- Frequência dos sintomas -->
        <div>
          <label class="block font-medium text-gray-700 mb-1">Com que frequência você apresenta sintomas?</label>
          <select v-model="frequencia" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
            <option value="" disabled>Selecione...</option>
            <option>Nunca</option>
            <option>Raramente</option>
            <option>Às vezes</option>
            <option>Frequentemente</option>
            <option>Sempre</option>
          </select>
        </div>

        <!-- Tratamento -->
        <div>
          <label class="block font-medium text-gray-700 mb-1">Você está atualmente recebendo algum tipo de tratamento?</label>
          <select v-model="tratamento" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
            <option value="" disabled>Selecione...</option>
            <option>Medicamentos</option>
            <option>Terapia</option>
            <option>Ambos</option>
            <option>Nenhum</option>
          </select>
        </div>

        <!-- Alimentação e emoções -->
        <div>
          <label class="block font-medium text-gray-700 mb-1">Você acredita que seus hábitos alimentares influenciam seu humor e emoções?</label>
          <select v-model="alimentacao" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
            <option value="" disabled>Selecione...</option>
            <option>Sim</option>
            <option>Não</option>
            <option>Não sei</option>
          </select>
        </div>

        <!-- Botão de envio -->
        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded-md hover:bg-blue-600 transition duration-300">
          Enviar Respostas
        </button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      diagnostico: '',
      frequencia: '',
      tratamento: '',
      alimentacao: ''
    };
  },
  methods: {
    submitForm() {
      alert("Respostas enviadas com sucesso!");
      this.$router.push('/usabilidade'); // Redireciona para a página inicial ou outra desejada
    }
  }
};
</script>
