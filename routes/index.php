<?php

use Loyalty\Controller\CategoryController;
use Loyalty\Controller\ProductController;

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/categories') {
    $categoryController = new CategoryController($entityManager);
    $categoryController->getCategories($request); exit();
};

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/products/by/category') {
    $productController = new ProductController($entityManager);
    $productController->getProductByCategoryName($request); exit();
};

if($request->getMethod() === "GET" && $request->getPathInfo() === '/v1/get/product') {
    $productController = new ProductController($entityManager);
    $productController->getProductById($request); exit();
};