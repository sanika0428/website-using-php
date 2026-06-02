<?php
include "../db.php";

$sql = "SELECT products.*, categories.category_name

FROM products

LEFT JOIN categories

ON products.category_id = categories.id";

$result = mysqli_query($conn,$sql);
?>

<table border="1">

<tr>
<th>Image</th>
<th>Title</th>
<th>Price</th>
<th>Category</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td>
<img src="../uploads/<?php echo $row['image']; ?>"
width="100">
</td>

<td><?php echo $row['title']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['category_name']; ?></td>

</tr>

<?php } ?>

</table>