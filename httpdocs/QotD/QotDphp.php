<?php
    require_once("../phpFiles/connection.php");

    try 
    {
                    
        $mysqlcmd=" SELECT QotD, who_said_it
                    FROM QotD";
        
        $result=$conn->query($mysqlcmd);             
        
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
            $row["QotD"]=str_replace("_"," ",$row["QotD"]);
            $row["who_said_it"]=str_replace("_"," ",$row["who_said_it"]);
            $message="
            <p>Quote of the day!</p>  
            <h2><em>'".$row["QotD"]."'</em></h2>
            <small>".$row["who_said_it"]."</small>"
            ;
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
?>
