<?php
    require_once("../dashboardphpFiles/session.php");
    require_once('../dashboardnav/dashboardNav.php');
    require_once("phpdashboardfeedback.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Dashboard Feedback</title>
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
                <div class="form-group">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <th scope="col">
                                    Email
                                </th> 
                                <th scope="col">
                                    feedback
                                </th>
                            </thead>
                            <tbody>
                            <tr>
                                <?php echo $message;?>                           
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>      
            </div>
        </div>        
    </div>

</body>
</html>