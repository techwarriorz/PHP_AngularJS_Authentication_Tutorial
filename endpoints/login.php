<?php 
    include("../connection.php");
    $data = json_decode(file_get_contents("php://input"));
    $password = $data->password;
    $username = $data->username;

    $userInfo = $db->query("SELECT email FROM users WHERE email='$username' AND password='$password'");
    $userInfo = $userInfo->fetchAll();

    echo json_encode($userInfo);

?>