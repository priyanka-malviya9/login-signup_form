<?php
 $conn=mysqli_connect('localhost','root','','login&signup');
    
 // Check connection     

if(mysqli_connect_errno())
{
 echo "Failed to connect MySQL: ". mysqli_connect_error();
}


//   signup   

if(isset($_POST['signup']))
{
    $username = $_POST['susername'];
    $email = $_POST['semail'];
    $password = $_POST['spassword'];
    $address = $_POST['saddress'];
    $city = $_POST['scity'];
    $mob = $_POST['smob'];

    $query = "INSERT INTO signup (username, email, password, address, city, mobile) VALUES ('$username', '$email', '$password', '$address', '$city' ,'$mob') ";
     $result = mysqli_query($conn, $query);
     if($result){
        header('location:login.php');
     }
     exit(); 
}

// login  
// session created on login click  
session_start();

if(isset($_POST['login'])){
   
    $lusername = $_POST['lusername'];
    $lpassword = $_POST['lpassword'];
   
    $query = "INSERT INTO login (username, password) VALUES ('$lusername', '$lpassword') ";
    $result = mysqli_query($conn, $query);
    if($result){
    // if(mysqli_num_rows($result) == 1) {
        $_SESSION['lusername'] = $lusername;
        header('location: welcome.php');
        exit(); 
        // } else {
        // echo "Invalid username or password";
    // }

    }
}

// logout.php - destroy session  on logout button

if(isset($_POST['logoutBtn']) == "logout") {
    session_destroy();
    header("location: login.php");
    exit();
}


?>