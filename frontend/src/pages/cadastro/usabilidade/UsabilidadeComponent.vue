<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
      <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
          Perguntas sobre Usabilidade
        </h2>
  
        <form @submit.prevent="submitForm" class="space-y-4">
          <!-- Expectativa do usuário -->
          <div>
            <label class="block font-medium text-gray-700 mb-1">O que você espera de um aplicativo de saúde mental e alimentação?</label>
            <select v-model="expectativa" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
              <option value="" disabled>Selecione...</option>
              <option>Monitoramento de refeições</option>
              <option>Dicas de bem-estar</option>
              <option>Acompanhamento com profissionais</option>
              <option>Outros</option>
            </select>
          </div>
  
          <!-- Frequência de notificações -->
          <div>
            <label class="block font-medium text-gray-700 mb-1">Com que frequência você gostaria de receber lembretes sobre saúde?</label>
            <select v-model="notificacoes" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-400">
              <option value="" disabled>Selecione...</option>
              <option>Diariamente</option>
              <option>Algumas vezes por semana</option>
              <option>Apenas quando necessário</option>
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
        expectativa: '',
        notificacoes: ''
      };
    },
    methods: {
      submitForm() {
        alert("Respostas enviadas com sucesso!");
        this.$router.push('/cadastro/objetivos-desafios'); // Redireciona para o próximo componente

      }
    }
  };
  </script>
