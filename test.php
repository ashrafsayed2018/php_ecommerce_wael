<?php

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array(
    "name" => "wael",
    "email" => "wael@gmail.com",
    "phone" => "324234",
    "verify_code" => "3243243",
);
$count = insertData($table, $data);
