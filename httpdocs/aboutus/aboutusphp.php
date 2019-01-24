<?php
    require_once("../phpFiles/connection.php");

    try 
    {               
        $table_name="aboutUs";     
        $mysqlcmd=" SELECT How_are_we_helping_you_through_our_site, Who_are_we, What_is_our_purpose
                    FROM $table_name";
        
        $result=$conn->query($mysqlcmd);             
        
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
            $row["How_are_we_helping_you_through_our_site"]=str_replace("_"," ",$row["How_are_we_helping_you_through_our_site"]);
            $row["Who_are_we"]=str_replace("_"," ",$row["Who_are_we"]);
            $row["What_is_our_purpose"]=str_replace("_"," ",$row["What_is_our_purpose"]);
            $message="
            <h2>How are we helping you through our site?</h2>   
            <p>".$row["How_are_we_helping_you_through_our_site"]."</p>            
            <h2>Who are we?</h2>   
            <p>".$row["Who_are_we"]."</p>                       
            <h2>What is our purpose?</h2>   
            <p>".$row["What_is_our_purpose"]."</p>"
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