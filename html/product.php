<?php
$product = [
         'id' => 101,
         'name' => 'Laptop Pro',
         'price' => 1299.99,
         'in_stock' => true
];
?>

<!DOCTYPE>
<html>
    <head>
        <title> Details</title>
    </head>
    <body>
        <h1><?php echo $product['name'];?></h1>
        <ul>
            <?php foreach($product as $key => $value): ?>
                  <li><strong><?php echo ucfirst(str_replace('_', ' ', $key)); ?>:</strong> <?php echo $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
