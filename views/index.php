<?php
include (__DIR__ . '/header.php');

if (str_contains($_SERVER['REQUEST_URI'], 'product')) {
    include (__DIR__ . '/product.php');
} else if (str_contains($_SERVER['REQUEST_URI'], 'categories')) {
    include (__DIR__ . '/category.php');
} else {
    include (__DIR__ . '/home.php');
}

    include (__DIR__ . '/footer.php');
