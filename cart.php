<?php
session_start();
include "db.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = $id;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>

<h2>Your Cart</h2>

<?php

if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
{
    foreach($_SESSION['cart'] as $product_id)
    {
        $result=mysqli_query($conn,
        "SELECT * FROM products
        WHERE id='$product_id'");

        $row=mysqli_fetch_assoc($result);

        echo "<p>";
        echo $row['title'];
        echo " - ₹";
        echo $row['price'];
        echo "</p>";
    }
}
else
{
    echo "Cart is Empty";
}
?>

<br><br>

<a href="products.php">
Continue Shopping
</a>

</body>
</html>