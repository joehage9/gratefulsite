<?php
    require_once("../dashboardphpFiles/session.php");
    if(isset($_COOKIE["isSignedin"]) && $_COOKIE["isSignedin"]=="yes")
    {
        if(isset($_POST["dashboardAboutusFormChanges"]))
        {
            try 
            {          
                require_once("../phpFiles/connection.php");
                $ans1=stripslashes($_POST['ans1']);
                $ans2=stripslashes($_POST['ans2']);
                $ans3=stripslashes($_POST['ans3']);

                $ans1=trim($_POST['ans1']);
                $ans2=trim($_POST['ans2']);
                $ans3=trim($_POST['ans3']);

                $ans1=str_replace(" ","_",$ans1);
                $ans2=str_replace(" ","_",$ans2);
                $ans3=str_replace(" ","_",$ans3);

                $ans1=str_replace("'","",$ans1);
                $ans2=str_replace("'","",$ans2);
                $ans3=str_replace("'","",$ans3);
                
                $table_name="aboutUs";

                if(!empty($ans1) && !empty($ans2) && !empty($ans3))
                {
                    $mysqlcmd=" INSERT INTO $table_name(How_are_we_helping_you_through_our_site,Who_are_we,What_is_our_purpose) 
                                VALUES('".$ans1."','".$ans2."','".$ans3."')";
                    
                    $conn->exec($mysqlcmd); 
                    // echo ("<script>alert('About us changes successful')</script>"); 
                    header("location:../dashboardmain/dashboard.php");    
                }  
                else echo ("<script>alert('Please fill out the empty inputs.')</script>");
            }
            catch(PDOException $e)
            {
                echo ("Connection failed.". $e->getMessage());
                // 
            }
            finally
            {
                $conn=null;
            }  
        }
        
    }
    else
    {
        header("Location:../dashboardsignin/dashboardSignin.php");        
    }

?>