<?php 
    require_once("phpsignin.php");
    require_once("../navigation/nav.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="jumbotron text-purple">        
        <div class="row">
            <div class="col-sm-12">

                <form method="POST">   
                    <h1 class="form-group">Sign In</h1>        
                    <div class="form-group">
                        <label for="exampleInputEmail">Email:</label>
                        <input  class="form-control" type="email" name="Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password:</label>    
                        <input  class="form-control" type="password" name="Password" required>                       
                    </div>     
                    <div class="text-danger">  
                        <?php
                            echo $message;
                        ?>
                    </div>             
                    <input class="btn btn-purple" type="submit" value="Submit" name="submitSigninToProgress">
                </form>               
               
                <small>If you don't have a registered account, you cannot check your progress! Otherwise <a href="../signup/Signup.php">register</a></small>
            </div>            
        </div>
    </div>
    
</body>
</html>