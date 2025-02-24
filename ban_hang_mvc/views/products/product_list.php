<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= $product["name"] ?> - <?= number_format($product["price"]) ?> VND</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>