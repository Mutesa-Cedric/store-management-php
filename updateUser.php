<?php

include_once 'connection.php';

// $id = $_GET['user_id'];
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$gender = $_POST["gender"];
$nationality = $_POST['nation'];
$username = $_POST['username'];
$password = $_POST['password'];

// if(empty($firstName)||empty($lastName)||empty($email)||empty($telephone)||empty($gender)||empty($nationality)||empty( $username)||empty($password)||empty($cpassword)){
//     echo "all fields are required!";
// }
// else{
if ($password == $cpassword) {
    $hashedPass = hash("md5", $password);
    $updateQuery = mysqli_query(
        $connect,
        "UPDATE users SET firstname='$firstName',lastname='$lastName',telephone='$telephone',gender='$gender',nationality='$nationality',username='$username',email='$email',password='$password' WHERE user_id=2"
    );
    if ($updateQuery) {

        echo "<h2>user with id=$id</h2>";

        echo "<a href=\"readUsers.php\">view users</a>";
    } else {
        echo "<h2>user upadate failed!</h2>";
    }
} else {
    echo "<h2>password does not match!</h2>";
}
