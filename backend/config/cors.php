<?php

return [
    'paths' => ['api/*'], // Permite CORS apenas para a API
    'allowed_methods' => ['*'], // Permite todos os métodos (GET, POST, etc.)
    'allowed_origins' => ['http://localhost:8080'], // Define o frontend Vue
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Permite todos os headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Permite cookies e sessões
];
