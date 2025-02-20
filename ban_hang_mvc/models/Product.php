<?php
include_once "./config/database.php";

class Product
{
    public static function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM products";
        $stmt = sqlsrv_query($conn, $sql);
        $products = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $products[] = $row;
        }
        return $products;
    }
}
