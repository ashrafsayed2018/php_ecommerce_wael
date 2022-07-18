<?php
require_once "../connect.php";

$name        = filterRequest("name");
$email       = filterRequest("email");
$password    = filterRequest("password");
$phone       = filterRequest("phone");
$verify_code = "0";



$stmt = $con->prepare("SELECT * FROM users WHERE email = ? OR phone = ?");
$stmt->execute([$email, $phone]);
$count = $stmt->rowCount();

if ($count > 0) {
    printFailure("البريد الالكتروني او الجوال مستخدم من قبل");
} else {

    $data = array(
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "phone" => $phone,
        "verify_code" => $verify_code
    );

    insertData("users", $data);
}
