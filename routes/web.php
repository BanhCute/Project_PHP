<?php
class Router
{
    public static function handle($uri)
    {
        // Lấy đúng phần đường dẫn
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Loại bỏ thư mục gốc nếu có
        $basePath = '/Project_PHP/public';
        if (strpos($uri, $basePath) === 0) {
            $uri = substr($uri, strlen($basePath));
        }

        // Xóa dấu `/` ở đầu và cuối
        $uri = trim($uri, '/');

        // DEBUG: Kiểm tra kết quả
        // var_dump($uri);

        if ($uri == '' || $uri == 'home') {
            require_once __DIR__ . '/../ban_hang_mvc/controllers/HomeController.php';
            $controller = new HomeController();
            $controller->index();
        } elseif ($uri == 'product') {
            require_once __DIR__ . '/../ban_hang_mvc/controllers/ProductController.php';
            $controller = new ProductController();
            $controller->index();
        } else {
            echo "404 - Không tìm thấy trang";
        }
    }
}
