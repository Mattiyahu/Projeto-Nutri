import { createRouter, createWebHistory } from 'vue-router';
import InicioComponent from '../views/InicioComponent.vue';
import SobreNos from '../views/SobreNos.vue';
import ArtigosComponent from '../views/ArtigosComponent.vue';
import TermosDeUso from '../views/TermosDeUso.vue';
import PoliticaDePrivacidade from '../views/PoliticaDePrivacidade.vue';
import Contato from '../views/Contato.vue';
import Cadastro from '../pages/cadastro/CadastroComponent.vue';
import UsabilidadeComponent from '../pages/cadastro/usabilidade/UsabilidadeComponent.vue';
import SaudeMentalComponent from '../pages/cadastro/saude-mental/SaudeMentalComponent.vue';
import LoginComponent from '../pages/login/LoginComponent.vue';
import HomeComponent from '../pages/home/HomeComponent.vue';
import RedeSocialComponent from '../pages/rede-social/RedeSocialComponent.vue';
import AcompanhamentoNutricionalComponent from '../pages/decisao/acompanhamento-nutricional/AcompanhamentoNutricionalComponent.vue';
import AcompanhamentoSaudeMentalComponent from '../pages/decisao/acompanhamento-saude-mental/AcompanhamentoSaudeMentalComponent.vue';
import InteragirPostagensComponent from '../pages/decisao/interagir-postagens/InteragirPostagensComponent.vue';
import ObjetivosDesafiosComponent from '@/pages/cadastro/objetivos-desafios/ObjetivosDesafiosComponent.vue';
import EstiloDeVidaComponent from '../pages/cadastro/estilo-de-vida/EstiloDeVidaComponent.vue';
import HabitosAlimentaresComponent from '../pages/cadastro/habitos-alimentares/HabitosAlimentaresComponent.vue';
import Parte2Component from '../pages/parte2/Parte2Component.vue';

const routes = [
  { path: '/', name: 'Inicio', component: InicioComponent },
  { path: '/sobre-nos', name: 'SobreNos', component: SobreNos },
  { path: '/artigos', name: 'Artigos', component: ArtigosComponent },
  { path: '/termos-de-uso', name: 'TermosDeUso', component: TermosDeUso },
  { path: '/politica-de-privacidade', name: 'PoliticaDePrivacidade', component: PoliticaDePrivacidade },
  { path: '/contato', name: 'Contato', component: Contato },
  { path: '/cadastro', name: 'Cadastro', component: Cadastro },
  { path: '/cadastro/saude-mental', name: 'SaudeMental', component: SaudeMentalComponent },
  { path: '/usabilidade', name: 'Usabilidade', component: UsabilidadeComponent },
  { path: '/login', name: 'Login', component: LoginComponent },
  { path: '/home', name: 'Home', component: HomeComponent },
  { path: '/rede-social', name: 'RedeSocial', component: RedeSocialComponent },
  { path: '/decisao/acompanhamento-nutricional', name: 'AcompanhamentoNutricional', component: AcompanhamentoNutricionalComponent },
  { path: '/decisao/acompanhamento-saude-mental', name: 'AcompanhamentoSaudeMental', component: AcompanhamentoSaudeMentalComponent },
  { path: '/decisao/interagir-postagens', name: 'InteragirPostagens', component: InteragirPostagensComponent },
  { path: '/cadastro/objetivos-desafios', name: 'ObjetivosDesafios', component: ObjetivosDesafiosComponent },
  { path: '/cadastro/estilo-de-vida', name: 'EstiloDeVida', component: EstiloDeVidaComponent },
  { path: '/cadastro/habitos-alimentares', name: 'HabitosAlimentares', component: HabitosAlimentaresComponent },
  { path: '/parte2', name: 'Parte2', component: Parte2Component }

];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
