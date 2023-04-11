<?php
    include('connection.php');
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$productType = $_POST['productType'];
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$lenght = $_POST['lenght'];
$width = $_POST['width'];


$sql= "insert into product(sku, name, price, product_type, size, weight, height, lenght, width) 
values('$sku', '$name', '$price', '$productType', '$size', '$weight', '$height', '$lenght', '$width')";
$registering = $dbConnect->query($sql);
$error = $dbConnect->error;
if($error)
{
    echo $error;}
    else{
    $result= 'Data Inserted Successfully';
    header("location:index.php?response=$result");
    }
?>