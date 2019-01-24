<?php 
    require_once("phpnav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <script src="../design/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="../mainPage/Main.php">Blessed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php active('Contactus.php');?>" href="../contactus/Contactus.php"><i class="fa fa-envelope" aria-hidden="false"></i> Contact us <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php active('Aboutus.php');?>" href="../aboutus/Aboutus.php"><i class="fa fa-child" aria-hidden="false"></i> About us <span class="sr-only">(current)</span></a>
                </li>
            
                <!-- <li>  
                    <a class="nav-link <?php active('Signin.php');?>" href="../signin/Signin.php"><i class="fa fa-user" aria-hidden="false"></i> Sign in <span class="sr-only">(current)</span></a>
                </li> -->
                <li>
                    <a class="nav-link" <?php active('Signup.php');?> href="../signup/Signup.php"><i class="fa fa-user-plus" aria-hidden="false"></i> Sign up <span class="sr-only">(current)</span></a>
                             
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>