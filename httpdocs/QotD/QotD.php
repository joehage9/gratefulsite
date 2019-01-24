<?php 
    require_once("../navigation/nav.php");
    require_once("QotDphp.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Quote of the day !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
   
</head>
<body>
    <div class="jumbotron text-center">
        
        <?php echo $message;?>
        
    </div>
   
   
</body>
</html>