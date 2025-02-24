<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../routes/web.php';

// Lấy URI từ query string "url" do .htaccess truyền vào
$uri = isset($_GET['url']) ? '/' . trim($_GET['url'], '/') : '/';

// Gọi Router xử lý
Router::handle($uri);
