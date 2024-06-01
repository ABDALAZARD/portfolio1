<?php
require_once 'db/Connection.php';
require_once 'vendor/autoload.php';

$db = new Connection;
$migrations = scandir(__DIR__ . '/db/migrations');

foreach ($migrations as $migration) {
    if ($migration === '.' || $migration === '..') {
        continue;
    }

    require_once 'db/migrations/' . $migration;

    echo "\nMigration done: $migration\n";
}

$db->toDatabase("INSERT INTO users VALUES(NULL, 'admin', MD5('".$_ENV['DB_PASSWORD']."'))");
$db->toDatabase("INSERT INTO template VALUES(NULL, 'default', 1)");
$db->toDatabase("INSERT INTO template VALUES(NULL, 'example', 1)");
$db->toDatabase("INSERT INTO template_user VALUES(NULL, 1, 1)");

echo "\nUser admin created successfully!!\n";;
?>