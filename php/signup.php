<?php
    $connection = mysqli_connect("localhost", 'root', '', 'myblog');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkdata = mysqli_query(connection, "SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_num_rows($checkdata);

    if($CHECK>0){
        echo "Email already exists";
    }
    else{
        $input = mysqli_query($connection, "INSERT INTO userdata(id,email, password) VALUES('$id','$email','$password')");
        if($input){
            header('Location:http://localhost/MyBlogApp/blog.html');
        }
        else{
            header('Location:http://localhost/MyBlogApp/signup.html');
        }
    }
?>