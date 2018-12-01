<?php

    include('config.php');  ;
    error_reporting(0);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message');";
    if(!mysqli_query($conn,$sql)){
        echo "Not inserted";
    }
    else{
        echo 'Inserted';
    }

header('location: ../index.php');
?>