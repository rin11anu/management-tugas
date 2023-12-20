<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username  && $password ) {
 
    header("Location: form_tugas.php");
    exit();
} else {
    echo "Login failed. Invalid username or password.";
}
?>
