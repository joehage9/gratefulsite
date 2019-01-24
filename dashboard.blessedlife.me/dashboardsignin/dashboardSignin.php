<?php
    setcookie("isSignedin","no",time()+3600,"/");
    setcookie("email","",time()+3600,"/");
    require_once("../dashboardphpFiles/session.php");
    require_once("phpdashboardsignin.php");    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Dashboard Signin</title>
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
                    <h1 class="form-group">Sign In to dashboard</h1>   
                    <div class="form-group">
                        <label for="exampleInputEmail">Email:               </label>
                        <input  class="form-control" type="email" name="Email" required>                            
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password:</label>    
                        <input  class="form-control" type="password" name="Password" required>                                            
                    </div>

                    <div class="text-danger">  
                        <?php
                            echo $message;  
                            echo($_COOKIE["email"]." ".$_COOKIE["isSignedin"]);
                                       
                        ?>
                    </div>
                    
                    <input class="btn btn-purple" type="submit" value="Submit" name="SubmitSignin">
                </form>    
            </div>
        </div>
    </div>
</body>
</html>