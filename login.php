
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
        <title>Login</title>
        
        <style>
            .container-fluid{
                margin: 0 auto;
                padding: 80px;
                horizontal-align: center;
                vertical-align: center;
            }
           
        </style>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="content" >
            <div class="container-fluid decor_bg" id="content">
                <div id="row justify-content-center">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{8,}" required="">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                            <div class="panel-footer"><p>Don't have an account?    <a href="signup.php" class="btn btn-default">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



