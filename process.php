<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<?php

 session_start();
 
 
$con=mysqli_connect("127.0.0.1", "root", "iiitu", "crud") or die($mysqli_error($con));
$id=0;
$update=false;
$name='';
$location='';

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $location=$_POST['location'];
   
$query="INSERT INTO users(name,location)VALUES('$name','$location')";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
   
    $_SESSION['message']="Record has been saved";
    $_SESSION['msg_type']= "success";
    
    header('location: index1.php');
   
}

if(isset($_GET['delete']))
{
   $id=$_GET['delete'];
   $con->query("DELETE FROM users where id=$id")or die($con->error());

   $_SESSION['message']="Record has been deleted";
   $_SESSION['msg_type']= "danger";
    
   header('location: index1.php');
   
}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result=$con->query("SELECT * FROM users WHERE id=$id") or die($con->error());
    if(count($result)==1)
    {
        $row=$result->fetch_array();
        $name=$row['name'];
        $location=$row['location'];
    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $location=$_POST['location'];
    
    $con->query("UPDATE users SET name='$name', location='$location' WHERE id=$id") or die($con->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']="warning";
    header('location: index1.php');
}
?>