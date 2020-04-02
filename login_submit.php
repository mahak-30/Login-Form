<?php

require_once("includes/common.php");

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $email= mysqli_real_escape_string($con,$email);
    $email= strip_tags($email);
    
    $password=$_POST['password'];
    $password= mysqli_real_escape_string($con,$password);
    $password= strip_tags($password);
    
    $regex_email="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
    $regex_password="/.{8,}/";
    
    $query="SELECT email, password FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($con,$query)or die($mysqli_error($con));
    $num= mysqli_num_rows($result);
    
    if($num==0)
    {
        $error="<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php?error=$error');
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        header('location: index.php');
    }
}

?>