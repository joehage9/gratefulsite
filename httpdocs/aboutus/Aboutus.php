<?php 
    require_once("../navigation/nav.php");
    require_once("aboutusphp.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | About us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $message;?>
            </div>
        </div>
    </div>
    
</body>
</html>