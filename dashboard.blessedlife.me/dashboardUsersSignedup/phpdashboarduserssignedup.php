<?php
    require_once("../dashboardUsersSignedup/dashboarduserssignedup.php");
    if(isset($_COOKIE["isSignedin"]) && $_COOKIE["isSignedin"]=="yes")
    {
        $message=" ";    
        try 
        {         
            require_once("../phpFiles/connection.php");        
            $tablename="users";   
            $mysqlcmd=" SELECT ID,First_name,Last_name,Email
                        FROM $tablename";
            
            $result=$conn->query($mysqlcmd);     
            while($row=$result->fetch(PDO::FETCH_ASSOC))
            {
                $message=$message."<tr><td>".$row["ID"]."</td><td>".$row["First_name"]." ".$row["Last_name"]."</td><td>".$row["Email"]."</td></tr>";
            }  
        }    
                
        catch(PDOException $e)
        {
            echo ("Connection failed.");
            // . $e->getMessage()
        }
        finally
        {
            $conn=null;
        } 
    }
    else
    {
        header("Location:../dashboardsignin/dashboardSignin.php");        
    }               
?>