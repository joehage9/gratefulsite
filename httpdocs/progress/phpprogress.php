<?php
    require_once("../phpFiles/connection.php");
    $message=" ";
    $data=" ";   
    try 
    {   
        $email=$_GET["email"];
        $table_name="userData";

        $mysqlcmd=" SELECT gratefulData, blessingData, achievementOfTheDay
                    FROM $table_name
                    where $table_name.Email='$email'";
        
        $result=$conn->query($mysqlcmd);  
        
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
            $row["gratefulData"]=str_replace("_"," ",$row["gratefulData"]);
            $row["blessingData"]=str_replace("_"," ",$row["blessingData"]);
            $row["achievementOfTheDay"]=str_replace("_"," ",$row["achievementOfTheDay"]);
            $message=$message."<tr><td>".$row["gratefulData"]."</td><td>".$row["blessingData"]."</td><td>".$row["achievementOfTheDay"]."</td></tr>";
        }  
        $data=" 
        <th>
            Grateful entries
        </th> 
        <th>
            blessing entries
        </th>
        <th>
            achievements entries
        </th>";
        
        
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