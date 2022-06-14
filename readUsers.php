<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

    body{
      width: 100vw;
      height: 100vh;
      background-color: rgb(17, 40, 71);
      display: flex;
      /* justify-content: center; */
      align-items: center;
      flex-direction: column;
      color:black;
    }
    table {
      border-radius: 20px;
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    table,
    tr,
    th {
      background-color:gray;
      /* color: #ffffff; */
      text-align: left;
    }

    th,
    td {
      padding: 12px 15px;
    }

    tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
    }
  </style>
</head>

<body>
  <?php
  //   echo "this is readUser page";
  include_once 'connection.php';

  $select = mysqli_query($connection, "SELECT * FROM users");


  echo "<table>
<tr>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
<th>Email</th>
<th>Gender</th>
<th>Telephone</th>
<th>Nationality</th>
<th>username</th>
<th>update</th>
<th>delete</th>
</tr>
";

  while ($row = mysqli_fetch_assoc($select)) {
    echo "<tr>";
    echo "<td>" . $row['userId'] . "</td>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['lastName'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['nationality'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td><a href=useredit.php?user_id=" . $row['userId'] . ">update</a> </td>";
    echo "<td><a href=userdelete.php?user_id=" . $row['userId'] . ">delete</a> </td>";
    echo "</tr>";
  }
  echo "</table>"
  ?>
</body>

</html>