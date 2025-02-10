import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import '@fortawesome/fontawesome-free/css/all.min.css'
// Defina seus componentes aqui
import LoginComponent from './pages/login/LoginComponent.vue'
import HomeComponent from './pages/home/HomeComponent.vue'
import CadastroComponent from './pages/cadastro/CadastroComponent.vue'
import DadosNutricionaisComponent from './pages/cadastro/dados-nutricionais/DadosNutricionaisComponent.vue'
import SaudeMentalComponent from './pages/cadastro/saude-mental/SaudeMentalComponent.vue'
import RedeSocialComponent from './pages/rede-social/RedeSocialComponent.vue'
import AcompanhamentoNutricionalComponent from './pages/decisao/acompanhamento-nutricional/AcompanhamentoNutricionalComponent.vue'
import AcompanhamentoSaudeMentalComponent from './pages/decisao/acompanhamento-saude-mental/AcompanhamentoSaudeMentalComponent.vue'
import InteragirPostagensComponent from './pages/decisao/interagir-postagens/InteragirPostagensComponent.vue'

const routes = [
  { path: '/login', component: LoginComponent },
  { path: '/home', component: HomeComponent },
  { path: '/cadastro', component: CadastroComponent },
  { path: '/cadastro/dados-nutricionais', component: DadosNutricionaisComponent },
  { path: '/cadastro/saude-mental', component: SaudeMentalComponent },
  { path: '/rede-social', component: RedeSocialComponent },
  { path: '/decisao/acompanhamento-nutricional', component: AcompanhamentoNutricionalComponent },
  { path: '/decisao/acompanhamento-saude-mental', component: AcompanhamentoSaudeMentalComponent },
  { path: '/decisao/interagir-postagens', component: InteragirPostagensComponent }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

const app = createApp(App)
app.use(router)
app.mount('#app')