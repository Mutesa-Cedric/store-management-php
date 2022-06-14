<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            color:white;
        }
    </style>
</head>
<body>
  <?php
//   echo "this is readUser page";
include_once 'connection.php';

$id=$_GET['user_id'];

$select=mysqli_query($connection, "SELECT * FROM users WHERE userId=$id ");

echo "<table>
<tr>
<caption>user with id $id </caption>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
<th>Email</th>
<th>Gender</th>
<th>Telephone</th>
<th>Nationality</th>
<th>username</th>
</tr>
";
while($row=mysqli_fetch_assoc($select)){
    echo "<tr>";
    echo "<td>".$row['userId']."</td>";
    echo "<td>".$row['firstName']."</td>";
    echo "<td>".$row['lastName']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['telephone']."</td>";
    echo "<td>".$row['nationality']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "</tr>";
}
echo "</table>"
?>

<h1>edit user with the above data</h1>
    <form action='updateUser.php' method='POST' >
        <input  class='text'type="text"  name="firstname" placeholder="firstName" value="" required/>
       <input   class='text' type="text"  name="lastname" placeholder="lastName" value="" required/>
       <input   class='text' type="text"  name="telephone" placeholder="telephone" value="" required/>
    
       <input  class='text' type="text"  name="gender" value="" placeholder="gender" required/>
   
       <input   class='text' type="text"  name="nation" value="" placeholder="nationarity" required/>
   
       <input   class='text' type="text"  name="username" placeholder="username" value="" required/>
   
      
       <input   class='text'type="email"  name="email" placeholder="email" required/>
 
       <input   class='text'type="password"  name="password" placeholder="password" required/>

       <input id="submit"   class='text' name="submit" type="submit" value="Register">
    </form>
</body>
</html>