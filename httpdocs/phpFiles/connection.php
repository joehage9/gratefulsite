<?php    
    $servername = "182.50.133.80:3306";
    $username = "joe_hage";
    $password = "30.91.43.28.Aa";
    $dbname="prosp-ph17089141102_";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>