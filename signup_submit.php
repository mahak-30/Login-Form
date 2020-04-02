<?php

require("includes/common.php");

$firstname=$_POST['firstname'];
$firstname= mysqli_real_escape_string($con,$firstname);

$lastname=$_POST['lastname'];
$lastname= mysqli_real_escape_string($con,$lastname);

$email=$_POST['email'];
$email= mysqli_real_escape_string($con,$email);

$password=$_POST['password'];
$password= mysqli_real_escape_string($con,$password);

$cpassword=$_POST['cpassword'];
$cpassword= mysqli_real_escape_string($con,$cpassword);

$gender=$_POST['gender'];
$gender= mysqli_real_escape_string($con,$gender);

//$hobby=$_POST['hobby'];
//$hobby= mysqli_real_escape_string($con,$hobby);

$city=$_POST['city'];
$city= mysqli_real_escape_string($con,$city);

$regex_email="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
$regex_password="/.{8,}/";
$regex_cpassword="/.{8,}/";

$query="SELECT * FROM users WHERE email='$email'";
$result= mysqli_query($con,$query)or die(mysqli_error($con));
$num=mysqli_num_rows($result);

if($num!=0){
    $m="<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=.$m');
}
else if (!preg_match($regex_email, $email)){
    $m="<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=.$m');
}
else if (!preg_match($regex_password, $password)){
    $m="<span class='red'>Not a valid Password Format</span>";
    header('location: signup.php?m2=.$m');
}
else if ($password!=$cpassword){
    $m="<span class='red'>The two passwords do not match</span>";
    header('location: signup.php?m3=.$m');
}
else{
   $query="INSERT INTO users(firstname, lastname, email, password, cpassword, gender, hobby, city)VALUES('$firstname','$lastname','$email','$password','$cpassword','$gender','$hobby','$city')";
   $result=mysqli_query($con,$query)or die(mysqli_error($con));
   $_SESSION['email']=$email;
   $_SESSION['password']=$password;
   header('location:index.php');
}
?>