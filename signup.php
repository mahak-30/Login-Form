<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
require("includes/common.php");
if(isset($_SESSION['email'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Sign Up</title>
        
        <style>
            input[type=radio] {
    border: 0px;
    width: 100%;
    height: 1em;
    vertical-align: middle;
    margin-top: -1px;
    display: inline-block;
}
label{
    vertical-align: middle;
    margin-top: -1px;
    display: inline-block;
}
        </style>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>SIGN UP</h3>
                        </div>
                        <div class="panel-body">
                        <form action="signup_submit.php" method="POST">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" placeholder="Firstname" class="form-control" pattern="[A-Za-z]+$" required="">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="Lastname" class="form-control" pattern="[A-Za-z]+$" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control" pattern=".{8,}" title="Must contain atleast eight or more characters" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="cpassword" placeholder="Confirm Password" pattern=".{8,}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="radio" name="gender" id="male" value="male" class="form-control" required="">
                                <label for="male">Male</label><br>
                                <input type="radio" name="gender" id="female" value="female" class="form-control" required="">
                                <label for="female">Female</label><br>
                                <input type="radio" name="gender" id="other" value="other" class="form-control" required="">
                                <label for="other">Other</label><br>
                            </div>
                            <div class="form-group">
                                <label>Hobby</label><br>
                                <input type="checkbox" id="hobby1" name="hobby" value="music">
                                <label for="hobby1">Music</label>
                                <input type="checkbox" id="hobby2" name="hobby" value="coding">
                                <label for="hobby2">Coding</label>
                                <input type="checkbox" id="hobby3" name="hobby" value="painting">
                                <label for="hobby3">Painting</label>
                                <input type="checkbox" id="hobby4" name="hobby" value="gaming">
                                <label for="hobby4">Gaming</label>
                                <input type="checkbox" id="hobby5" name="hobby" value="blogging">
                                <label for="hobby5">Blogging</label>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" placeholder="City" class="form-control" required="">
                            </div>
                       

                        
                      
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button><br/>
  </div>
                         </form>
                            
                        <div class="panel-footer"><p>Already have an account?    <a href="login.php" class="btn btn-default">Login</a></p></div>
                    </div></div>
                </div>
            </div>
        </div>
    </body>
</html>
