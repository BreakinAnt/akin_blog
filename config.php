<?php

if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = array_map('trim', explode('=', $line, 2));
        if (!getenv($name)) {
            putenv("{$name}={$value}");
            $_ENV[$name] = $value;
        }
    }
}

return [
    'database' => [
        'host'      => getenv('DB_HOST') ?: '127.0.0.1',
        'port'      => getenv('DB_PORT') ?: 3306,
        'name'      => getenv('DB_NAME') ?: 'myapp',
        'charset'   => getenv('DB_CHARSET') ?: 'utf8mb4',
        'user'      => getenv('DB_USER') ?: 'root',
        'password'  => getenv('DB_PASSWORD') ?: ''
    ]
];