// src/axios.js
import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000'; // URL do seu backend Laravel
axios.defaults.withCredentials = true; // Envia cookies com requisições

export default axios;
