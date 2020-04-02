<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Sign Up</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php require_once 'process.php'; ?>
        <?php
        if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
        </div>    
        
        <?php endif ?>
        
        <div class="container">
      <?php
        $sql="SELECT * FROM users";
        $result= mysqli_query($con,$sql)or die($mysqli_error($con));
        //pre_r($result);  
        //pre_r($result->fetch_assoc());
        //pre_r($result->fetch_assoc());
        ?>
        
<!--<div class="row justify-content-center">-->
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Location</th>
                <th  style="text-align: center" colspan="2">Action</th>
            </tr> 
        </thead>
        <?php
        while($row=$result->fetch_assoc()):?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['location'];?></td>
            <td>
                <a href="index1.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td> 
        </tr>
        <?php endwhile ?>
    </table>
<!--</div>-->
</div>
        
        <?php
        function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        }
?>
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel panel-body">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" value="<?php echo $name;?>" class="form-control">
            </div>
            <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="Enter your location" value="<?php echo $location;?>" class="form-control">
            </div>
            <div class="form-group">
            <?php if($update==true): ?>
            <button type="submit" name="update" class="btn btn-info">Update</button>
            <?php else: ?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
            <?php endif; ?>
            </div>
        </form>
            </div>
        </div>
            <div class="panel-body">
            <form action="logout_submit.php" method="POST">
                <p>Want to logout?</p>
                <button type="submit" name="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        </div>
    </body>

 