<?php 
    require_once("../dashboardphpFiles/session.php");
    if(isset($_POST["logoutButton"]))
    {
        setcookie("isSignedin","no",time() - 3600); // set the expiration date to one hour ago
        setcookie("email"," ",time() - 3600); // set the expiration date to one hour ago
        header("Location:../dashboardsignin/dashboardSignin.php");    
    }
?>