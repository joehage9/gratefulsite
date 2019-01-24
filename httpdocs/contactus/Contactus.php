<?php 
    require_once("../navigation/nav.php");
    require_once("conctacusphp.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blessed | Feedback Time !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../design/css/mycss.css" />
    <script src="../design/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-purple">        
        <div class="row">
            <div class="col-sm-12">                
                <h2>Your feedback is very helpful and much appreciated! </h2>  
                <form method="POST">
                    <div class="form-group">
                        <label name=Email>Email:</label>
                        <input class="form-control" type="email" name="Email">
                    </div>
                    <div class="form-group">
                        <label name=feedback>Comments:</label>                        
                        <input class="form-control" type="text" placeholder="Leave your comments here!" name="feedbackText">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-purple" type="Submit" value="Submit" name="submitFeedback">
                    </div>
                </form>     
            </div>
        </div>
    </div>



    
</body>
</html>