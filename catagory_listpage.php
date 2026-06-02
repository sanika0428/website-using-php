<?php
include "../db.php";

$result = mysqli_query($conn,"SELECT * FROM categories");
?>

<table border="1">

<tr>
<th>ID</th>
<th>Category Name</th>
<th>Parent ID</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['category_name']; ?></td>
<td><?php echo $row['parent_id']; ?></td>
</tr>

<?php } ?>

</table>