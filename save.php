<?php
require "config.php";

$uname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$gen = $_POST['gender'];
$address = $_POST['addr'];
$language = $_POST['lang'];
$lan = implode(",", $language);

$query = "INSERT INTO phpregister (username, email, phone, password, gender, lang, address) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute([$uname, $email, $phone, $pass, $gen, $lan, $address]);
    echo "<script>alert('Stored success');window.location.href='register.php';</script>";
} catch (PDOException $e) {
    echo "<script>alert('Stored error');</script>";
}

?>
