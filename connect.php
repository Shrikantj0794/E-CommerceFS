<?php
    $User Id = $_POST['User Id'];
    $Password = $_POST['Password'];

    $conn = new mysqli('localhost','root','','login');
    if($conn->connection_error){
        die('connection failed : '.$conn->connection_error');
    }else{
        $stmt = $conn->prepare("insert into registration(User Id,Password)
        values(?,?)");
        $stmt->bind_param("ss,$User Id,Password);
        $stmt->execute();
        echo "registration Successfully..";
        $stmt->close();
        $conn->close();
    }
?>