<?php
    $connect=mysqli_connect('localhost','root','','booksworld');
    $query="INSERT INTO `Details` VALUES(?,?)";
    $stmt=mysqli_prepare($connect,$query);
    mysqli_stmt_bind_param($stmt,'ss',$name,$email);
    $name=$_POST['name'];
    $email=$_POST['email'];
    mysqli_stmt_execute($stmt);
?>