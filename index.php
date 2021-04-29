<?php

use Loyalty\Controller\CategoryController;
use Loyalty\Controller\ProductController;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/config/index.php';
require_once __DIR__ . '/bootstrap.php';

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/categories') {
    $categoryController = new CategoryController($entityManager);
    $categoryController->getCategories($request);
};

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/products/by/category') {
    $productController = new ProductController($entityManager);
    $productController->getProductById($request);
};

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/product') {
    $productController = new ProductController($entityManager);
    $productController->getProductByCategoryName($request);
};


