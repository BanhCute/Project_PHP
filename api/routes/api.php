<?php
require_once __DIR__ . '/../controllers/ProductController.php';

// Lấy request từ URL đầy đủ
$request = isset($_SERVER['REQUEST_URI']) ? trim($_SERVER['REQUEST_URI'], '/') : '';

switch ($request) {
    case 'api/products': // Đúng đường dẫn API
        $controller = new ProductController();
        $controller->index();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo json_encode(["message" => "Route not found"]);
        break;
}
