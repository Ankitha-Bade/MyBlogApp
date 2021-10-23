<?php
    $connection = mysqli_connect('localhost','root','','myblog');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkdata = mysqli_query(connection, "SELECT * FROM userdata WHERE email = '$email' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($CHECK>0){
        header('Location:http://localhost/MyBlogApp/blog.html');
    }
    else{
        header('Location:http://localhost/MyBlogApp/signin.html');
    }
?>