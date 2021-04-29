<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\HttpFoundation\Request;

$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/app/src/Entity/"), $isDevMode);

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => '#Gb$%strongPswd!howAreYou888%$#',
    'dbname'   => 'shopApi',
);

$entityManager = EntityManager::create($dbParams, $config);
$request = Request::createFromGlobals();

