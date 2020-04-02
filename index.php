<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .panel-body{
                text-align: center;
            }
        </style>
        <title>Welcome</title>
    </head>
    <body>
        <h2 style="text-align: center">Welcome!</h2>
        <h4 style="text-align: center"><a href="index1.php">Click here</a> - if you want to use update and delete features</h4>
        <div class="panel-body">
            <form action="logout_submit.php" method="POST">
                <p>Want to logout?</p>
                <button type="submit" name="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </body>
</html>
