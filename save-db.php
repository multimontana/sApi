<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/app/config/index.php';

use Loyalty\Entity\Category;
use Loyalty\Entity\Product;
use Loyalty\Services\LoyaltyService;

$loyaltyService = new LoyaltyService(
    TEST_API['login'],
    TEST_API['password']
);

$xmlCategoriesResponseObject = $loyaltyService->getApiCategories((TEST_API['url']));
$category = new Category();
$category->saveCategories($entityManager, $xmlCategoriesResponseObject);

$xmlCategoriesResponseObject = $loyaltyService->getApiProducts((TEST_API['url']));
$product = new Product();
$product->saveProducts($entityManager, $xmlCategoriesResponseObject);
