<?php
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //connection of database
    $conn = new mysqli('localhost','root','I@aLi0nTmrw','admitease');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login(Email,Password) values(?,?)");
        $stmt -> bind_param("ss",$Email,$Password);
        $stmt -> execute();
        echo "registration successfull";
        $stmt -> close();
        $conn -> close();
    }
?>