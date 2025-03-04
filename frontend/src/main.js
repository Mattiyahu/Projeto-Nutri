import { createApp } from 'vue';
import App from './App.vue';
import router from './router'; // Importa as rotas do index.js

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
import '@fortawesome/fontawesome-free/css/all.min.css';
import './registerServiceWorker'

const app = createApp(App);
app.use(router);
app.mount('#app');



