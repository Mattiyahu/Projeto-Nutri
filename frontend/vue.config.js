const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true
})
module.exports = {
  devServer: {
    proxy: 'http://localhost:8000', // URL do seu servidor backend Laravel
  },
};
module.exports = {
  devServer: {
    client: {
      webSocketURL: 'wss://localhost:8080/ws', // Force WebSocket to use wss://
    },
    allowedHosts: 'all', // Permite todos os hosts, incluindo Ngrok
  },
};