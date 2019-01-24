<?php
    require_once("../dashboardphpFiles/session.php");
    if(isset($_COOKIE["isSignedin"]) && $_COOKIE["isSignedin"]=="yes")
    {        
        if(isset($_POST["dashboardQotDFormChanges"]))
        {
            try 
            {          
                require_once("../phpFiles/connection.php");
                $ans1=stripslashes($_POST['ans1']);
                $ans2=stripslashes($_POST['ans2']);
                
                $ans1=trim($_POST['ans1']);
                $ans2=trim($_POST['ans2']);

                $ans1=str_replace(" ","_",$ans1);
                $ans2=str_replace(" ","_",$ans2);
                
                $ans1=str_replace("'","",$ans1);
                $ans2=str_replace("'","",$ans2);

                $table_name="QotD";

                if(!empty($ans1) && !empty($ans2))
                {
                    $mysqlcmd=" INSERT INTO $table_name(QotD,who_said_it) 
                                VALUES('".$ans1."','".$ans2."')";
                    
                    $conn->exec($mysqlcmd); 

                    header("location:../dashboardmain/dashboard.php");    
                }  
                else echo ("<script>alert('Please fill out the empty inputs.')</script>");
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
    }
?>