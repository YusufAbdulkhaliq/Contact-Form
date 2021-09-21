<?php

$mysqli = new mysqli('localhost', 'root', 'Root123', 'contact-form') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO cdata (name, phone, email) VALUES('$name', '$phone', '$email')") or die($mysqli->error);
    header('location: index.php');
}

$mysqli = new mysqli('localhost', 'root', 'Root123', 'contact-form') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM cdata") or die($mysqli->error);
