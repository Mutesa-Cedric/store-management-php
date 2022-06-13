<?php
include_once 'connection.php';

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$gender = $_POST["gender"];
$nationality = $_POST['nation'];
$username = $_POST['username'];
$password = $_POST['password'];

// echo $_FILES["fileToUpload"];

if (empty($firstName) || empty($lastName) || empty($email) || empty($telephone) || empty($gender) || empty($nationality) || empty($username) || empty($password)) {
    echo "all fields are required!";
} else {
    $hashedPass = hash("md5", $password);
    $insertQuery = mysqli_query(
        $connection,
        "INSERT INTO users(firstName,lastName,telephone,gender,nationality,username,email,password) VALUES('$firstName','$lastName','$telephone','$gender','$nationality','$username','$email','$hashedPass')"
    );
    if ($insertQuery) {

        echo "<h2>user registration successful!</h2>";

        echo "<a href=\"readUsers.php\">read users</a>";
    } else {
        echo "<h2>user registration failed!</h2>";
    }
}
