<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
table{
  margin:2em auto;
}
      table,tr,td,th{
        border:2px solid black;
        color:rgb(17, 40, 71);
        border-collapse:collapse;
        font-size:24px;
        padding:2px;

      }
      th{
      background-color:rgba(0,0,200,0.7);
      color:white;
      font-weight:lighter;
      font-size:24px;
      }

      td{
        color:rgb(17, 40, 71);
      }
    </style>
</head>
<body>
  <?php
//   echo "this is readUser page";
include_once 'connection.php';

$select=mysqli_query($connection, "SELECT * FROM products");


echo "<table>
<tr>
<th>product_Id</th>
<th>product_name</th>
<th>brand</th>
<th>supplier's phone</th>
<th>supplier's name</th>
<th>date added</th>
<th>update</th>
<th>delete</th>
</tr>
";

while($row=mysqli_fetch_assoc($select)){
    echo "<tr>";
    echo "<td>".$row['productId']."</td>";
    echo "<td>".$row['product_name']."</td>";
    echo "<td>".$row['brand']."</td>";
    echo "<td>".$row['supplier_phone']."</td>";
    echo "<td>".$row['supplier']."</td>";
    echo "<td>".$row['added_date']."</td>";
    echo "<td><a href=product.php?productId=".$row['productId'].">update</a> </td>";
    echo "<td><a href=userdelete.php?productId=".$row['productId'].">delete</a> </td>";
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>