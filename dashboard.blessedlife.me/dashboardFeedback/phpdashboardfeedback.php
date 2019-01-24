<?php
    require_once("../dashboardphpFiles/session.php");
    if(isset($_COOKIE["isSignedin"]) && $_COOKIE["isSignedin"]=="yes")
    {
        $message=" ";    
        try 
        {         
            require_once("../phpFiles/connection.php");        
            $tablename="feedback";   
            $mysqlcmd=" SELECT Email,feedback
                        FROM $tablename";
            
            $result=$conn->query($mysqlcmd);     
            while($row=$result->fetch(PDO::FETCH_ASSOC))
            {
                $row["feedback"]=str_replace("_"," ",$row["feedback"]);
                $message=$message."<tr><td>".$row["feedback"]."</td><td>".$row["Email"]."</td></tr>";
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