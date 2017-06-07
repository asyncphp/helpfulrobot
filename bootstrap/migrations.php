<?php

require_once __DIR__ . "/environment.php";

$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$name = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

return [
    "migration_dirs" => [
        "default" => __DIR__ . "/../database/migrations",
    ],
    "environments" => [
        "local" => [
            "adapter" => "mysql",
            "host" => "{$host}:{$port}",
            "username" => $user,
            "password" => $pass,
            "db_name" => $name,
            "charset" => "utf8",
        ],
    ],
    "default_environment" => "local",
    "log_table_name" => "migrations",
];
