<template>
  <div class="main">
    <h1>Dados Nutricionais</h1>
    <form @submit.prevent="submitForm">
      <div>
        <label for="calorias">Calorias:</label>
        <input type="number" id="calorias" v-model="calorias" required>
      </div>
      <div>
        <label for="proteinas">Proteínas:</label>
        <input type="number" id="proteinas" v-model="proteinas" required>
      </div>
      <div>
        <label for="carboidratos">Carboidratos:</label>
        <input type="number" id="carboidratos" v-model="carboidratos" required>
      </div>
      <div>
        <label for="gorduras">Gorduras:</label>
        <input type="number" id="gorduras" v-model="gorduras" required>
      </div>
      <button type="submit">Salvar</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'DadosNutricionaisComponent',
  data() {
    return {
      calorias: '',
      proteinas: '',
      carboidratos: '',
      gorduras: ''
    }
  },
  methods: {
    submitForm() {
      // Lógica para salvar os dados nutricionais
      console.log('Dados nutricionais salvos:', this.calorias, this.proteinas, this.carboidratos, this.gorduras);
    }
  }
}
</script>

<style scoped>
@import './style.scss';
</style>
