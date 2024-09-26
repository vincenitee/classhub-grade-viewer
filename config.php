<?php 
    require __DIR__ . '/vendor/autoload.php';

    use Dotenv\Dotenv;

    // Loads the .env file
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    return [
        'db_host' => $_ENV['DB_HOST'] ?? 'localhost',
        'db_user' => $_ENV['DB_USER'] ?? 'root',
        'db_pass' => $_ENV['DB_PASSWORD'] ?? '',
        'db_name' => $_ENV['DB_NAME'] ?? '',
    ];
?>