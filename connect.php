<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //database connection 

    $conn = new mysqli('localhost','root','','feedback');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into user_data(firstname, lastname, phone, email, message) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$firstname, $lastname, $phone, $email, $message);
        $stmt->execute();
        echo "feedback submitted successfully..";
        $stmt->close();
        $conn->close();
        
    }



?>