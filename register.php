<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // $confirm_password=$_POST['confirm_password'];

    // password encryption with md5 algorithm
    $password=md5($password);
    $confirm_password=md5($confirm_password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exist !";
    }
    else{
        $insertQuery="INSERT INTO users(username,email,password)
                        VALUES ('$username','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: index.php");
        }
        else{
            echo "Error: .$conn->error";
        }
    }
   
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: home.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>