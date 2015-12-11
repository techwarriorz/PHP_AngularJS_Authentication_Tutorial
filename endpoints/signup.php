<?php 
    include("../connection.php");
    $data = json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;

    $q = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $query = $db->prepare($q);
    $execute = $query->execute(array(
        ":email" => $username,
        ":password" => sha1($password)
    ));

    echo json_encode($username);
?>