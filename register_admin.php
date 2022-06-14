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
    $target_dir = "uploads/";
    $file_path_dir = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (isset($_POST["submit"])) {
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "file size too big!";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_path_dir)) {
                echo "your file " . basename($_FILES["fileToUpload"]["name"]) . "was uploaded!";
                $profileImage= basename($_FILES["fileToUpload"]["name"]);
                $hashedPass = hash("md5", $password);
                $insertQuery = mysqli_query(
                    $connection,
                    "INSERT INTO users(firstName,lastName,telephone,gender,nationality,username,email,password,profileImage) VALUES('$firstName','$lastName','$telephone','$gender','$nationality','$username','$email','$hashedPass','$profileImage')"
                );
                if ($insertQuery) {

                    echo "<h2>administrator registration successful!</h2>";

                    echo "<a href=\"readUsers.php\">read users</a>";
                } else {
                    echo "<h2>user registration failed!</h2>";
                }
            } else {
                echo "sorry, there was an error uploading your file";
            }
        }
    }
}

?>