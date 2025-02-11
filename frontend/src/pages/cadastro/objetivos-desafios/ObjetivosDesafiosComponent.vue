<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
      <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
          Perguntas sobre Objetivos e Desafios
        </h2>
  
        <form @submit.prevent="submitForm" class="space-y-4">
          <!-- Pergunta sobre objetivos -->
          <div>
            <label class="block font-medium text-gray-700 mb-1">Quais são seus principais objetivos?</label>
            <input v-model="objetivos" type="text" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400" placeholder="Digite seus objetivos" />
          </div>
  
          <!-- Pergunta sobre desafios -->
          <div>
            <label class="block font-medium text-gray-700 mb-1">Quais desafios você enfrenta?</label>
            <input v-model="desafios" type="text" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400" placeholder="Digite seus desafios" />
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
        objetivos: '',
        desafios: ''
      };
    },
    methods: {
      submitForm() {
        alert("Respostas enviadas com sucesso!");
        this.$router.push('/cadastro/estilo-de-vida'); // Redireciona para o próximo componente
      }
    }
};
</script>
