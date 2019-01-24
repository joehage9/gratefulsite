<?php
    if(isset($_POST["submitUserData"]))
    {
        try 
        {                
            require_once("../phpFiles/connection.php");            
            $ans1=trim($_POST["gratefulInput"]);
            $ans2=trim($_POST["blessingsInput"]);
            $ans3=trim($_POST["achieveInput"]);
            $email=trim($_POST["Email"]);

            $ans1=stripslashes($_POST["gratefulInput"]);
            $ans2=stripslashes($_POST["blessingsInput"]);
            $ans3=stripslashes($_POST["achieveInput"]);
            $email=stripslashes($_POST["Email"]);

            $ans1=str_replace("'","",$ans1);
            $ans2=str_replace("'","",$ans2);
            $ans3=str_replace("'","",$ans3);
            
            $ans1=str_replace(" ","_",$ans1);
            $ans2=str_replace(" ","_",$ans2);
            $ans3=str_replace(" ","_",$ans3);

            if(!empty($ans1) && !empty($ans2) && !empty($ans3) && !empty($email))
            {    
                $table_name="userData";
                $mysqlcmd=" INSERT INTO $table_name(Email,gratefulData,blessingData,achievementOfTheDay)
                            VALUES ('".$email."','".$ans1."','".$ans2."','".$ans3."')";
                
                $conn->exec($mysqlcmd);        
                if($conn)
                {
                    header("location:../QotD/QotD.php");
                }
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
    if(isset($_POST["showProgress"]))
    {
        header("location:../signin/Signin.php");
    }
    
    
?> 