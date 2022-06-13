<?php
include_once 'connection.php';

$product_Name = $_POST["p_name"];
$brand = $_POST["p_brand"];
$supplier_phone = $_POST["supplier_phone"];
$supplier = $_POST["supplier"];
// echo $_FILES["fileToUpload"];

if (empty($product_Name) || empty($brand) || empty($supplier_phone) || empty($supplier)) {
    echo "all fields are required!";
} else {
    $insertQuery = mysqli_query(
        $connection,
        "INSERT INTO products(product_Name,brand,supplier_phone,supplier) VALUES('$product_Name','$brand','$supplier_phone','$supplier')"
    );
    if ($insertQuery) {

        echo "<h2>product registration successful!</h2>";

        echo "<a href=\"readProducts.php\">view products</a>";
    } else {
        echo "<h2>product registration failed!</h2>";
    }
}
