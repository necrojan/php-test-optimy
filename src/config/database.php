<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$paths = [__DIR__ . '../../src/Entity'];

$params = [
    'driver' => $_ENV['DB_DRIVER'],
    'host' => $_ENV['DB_HOST'],
    'dbname' => $_ENV['DB_NAME'],
    'user' => $_ENV['DB_USER'],
    'pass' => $_ENV['DB_PASS']
];

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: $paths,
    isDevMode: true
);
$connection = DriverManager::getConnection($params, $config);
return new EntityManager($connection, $config);

