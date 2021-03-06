<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\HttpFoundation\Request;

$isDevMode = true;
require './app/config/index.php';
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/app/src/Entity/"), $isDevMode);


$entityManager = EntityManager::create(DB, $config);
$request = Request::createFromGlobals();

