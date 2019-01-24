<?php
    require_once("../dashboardphpFiles/session.php");
    require_once('../dashboardnav/dashboardNav.php');
    require_once("phpQotDchange.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Dashboard QotD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <div class="jumbotron">       
        <div class="row">
            <div class="col-sm-12">             
                    
                <form method="POST">
                    <div class="form-group">
                        <label>Quote of the day:</label>
                        <input class="form-control" type="text" name="ans1">
                    </div>    

                    <div class="form-group">
                        <label>Who said that quote:</label>
                        <input class="form-control" type="text" name="ans2">
                    </div>                

                    <div class="form-group">
                        <input class="btn btn-primary" type="Submit" value="Submit" name="dashboardQotDFormChanges">
                        <input class="btn btn-secondary" type="reset" value="Reset">
                    </div>
                </form>              
            </div>
        </div>        
    </div>

</body>
</html>