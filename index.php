<?php

require_once('connect.php');
require_once('process.php');
require_once('configuration.php');

$pdo = new PDO('mysql:host=localhost;dbname=scandiweb_project', 'root', '');
$query = $pdo->query("SELECT * FROM product");
$data = $query->fetchAll(PDO::FETCH_ASSOC);

// Pass data to the next page using $_SESSION
session_start();
$_SESSION['data'] = $data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel='stylesheet' href='styles.css'/>
</head>
<body>
    <div class="box">
    <form action="" method="post">
        <div class='section header'>
            <div class='logo'><h2>Product List</h2></div>
            <a class='add' href='addproduct.php'>ADD</a>
            <button type="submit" id="delete-product-btn" name="delete-product-btn">MASS DELETE</button>
        </div>
        <hr>
        <div class='section container'>
                <?php foreach ($_SESSION['data'] as $row ):   ?>
                <div class='main'>
                    <input type="checkbox" class="delete-checkbox" name="delete_checkbox[]" value="<?php echo $row['product_id']; ?>">
                    <p class="sku"><?php echo $row['sku']; ?></p>
                    <p class="name"><?php echo $row['name']; ?></p>
                    <p class="price"><?php echo $row['price']; ?></p>
                    <p class="type">
                    <?php echo !empty($row['size']) ? "Size: ".$row['size']." MB" : '' ?>
                    <?php echo !empty($row['weight']) ? "Weight: ".$row['weight']." KG" : '' ?>
                    <?php echo empty($row['size']) && empty($row['weight']) ? "Dimensions: ".$row['height']."x".$row['width']."x".$row['lenght'] : '' ?>
                    </p>
      </div>
      <?php endforeach;   ?>
    </form>  
           
        </div>
        <hr>
        <div class='section footer'>Scandiweb Test Assignment</div>
    </div>
</body>
</html>