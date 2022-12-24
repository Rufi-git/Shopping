<?php

$sku = $_POST["sku"];
$name = $_POST["name"];
$price = $_POST["price"];
$type = $_POST["type"];
$typevalue = $_POST["typevalue"];

include "../Controllers/dbh.contr.php";
include "../Controllers/product.contr.php";
include "../Models/product.model.php";

$signup = new ProductModel($sku, $name, $price, $type, $typevalue);

$signup->productAdd();
header("location: ../Views/Home/index.php?error=none");