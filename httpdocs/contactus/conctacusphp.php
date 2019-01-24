<?php    
    if(isset($_POST["submitFeedback"]))
    {
        try 
        {
            require_once("../phpFiles/connection.php");
        
            $Email=trim($_POST['Email']);
            $feedback=trim($_POST['feedbackText']);
            
            $Email=stripslashes($_POST['Email']);
            $feedback=stripslashes($_POST['feedbackText']);

            $feedback=str_replace("'","",$feedback);             
            
            $feedback=str_replace(" ","_",$feedback);

            strtolower($Email);
            
            if(!empty($Email)&&!empty($feedback))
            {

                $table_name="feedback";   
                $mysqlcmd=" INSERT INTO $table_name(Email,feedback) 
                            VALUES('".$Email."','".$feedback."')";
                
                $conn->exec($mysqlcmd);                                                            
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
?>