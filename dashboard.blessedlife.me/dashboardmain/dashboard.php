<?php
    require_once("../dashboardphpFiles/session.php");
    require_once('phpdashboard.php');
    require_once('../dashboardnav/dashboardNav.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <div classs="container">       
        <div class="row">

            <div class="col-md-6 col-sm-12">   
                <div class="jumbotron text-center">
                    <h2>Make changes to <em><a href="http://www.blessedlife.me/aboutus/Aboutus.php">About us</a></em> page!</h2>
                    <a href="http:../dashboardaboutus/dashboardAboutus.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">             
                <div class="jumbotron text-center">
                    <h2>Make changes to <em><a href="http://www.blessedlife.me/QotD/QotD.php">Quote of the day</a></em> page!</h2>
                    <a href="http:../dashboardQotD/dashboardQotD.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>
        
            <div class="col-md-6 col-sm-12">             
                <div class="jumbotron text-center">
                    <h2>Check feedbacks and reviews.</h2>
                    <a href="../dashboardfeedback/dashboardfeedback.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>                
            </div>  

            <div class="col-md-6 col-sm-12">             
                <div class="jumbotron text-center">
                    <h2>Check Users.</h2>
                    <a href="../dashboardUsersSignedup/dashboarduserssignedup.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>           
        
        </div>        
    </div>   
</body>
</html>