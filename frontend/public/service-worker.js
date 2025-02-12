// Cache dos arquivos estáticos
self.addEventListener('install', (event) => {
    event.waitUntil(
      caches.open('AliMENTE-alimente-cache').then((cache) => {
        return cache.addAll([
          '/',
          '/index.html',
          '/css/app.css',
          '/js/app.js',
          '/img/icons/android-chrome-192x192.png',
          '/img/icons/android-chrome-512x512.png'
        ]);
      })
    );
  });
  
  // Interceptando as requisições e respondendo com os arquivos em cache
  self.addEventListener('fetch', (event) => {
    event.respondWith(
      caches.match(event.request).then((cachedResponse) => {
        return cachedResponse || fetch(event.request);
      })
    );
  });
  