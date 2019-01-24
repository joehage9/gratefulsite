<?php 
    require_once("../dashboardphpFiles/session.php");
    $message=null;
    $_COOKIE["isSignedin"]="no";
    $_COOKIE["email"]="noEmail";
 
    if(isset($_POST["SubmitSignin"]))
    {
        try 
        {             
            require_once("../phpFiles/connection.php");       
            if(!empty($_POST['Password']) && !empty($_POST['Email']))
            {   
                $email = trim($_POST['Email']);
                $pass = trim($_POST['Password']);
    
                $email = stripslashes($_POST['Email']);
                $pass = stripslashes($_POST['Password']);
                
                strtolower($email);

                $table_name ="admin";
                $mysqlcmd=" SELECT COUNT(*) as COUNT
                            from $table_name 
                            where $table_name.Email='$email' and $table_name.Password='$pass'"; 

                $conn->query($mysqlcmd); 
                $result=$conn->query($mysqlcmd);             
                $count=0;
                
                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $count=$row["COUNT"];
                }      
                
                if($count==1)
                {
                    setcookie("isSignedin","yes",time()+3600,"/");
                    setcookie("email",$email,time()+3600,"/");
                    header('Location:../dashboardmain/dashboard.php');
                }
                else 
                {
                    $message="Incorrect username / password.";                    
                }
            }     
        }
        catch(PDOException $e)
        {
            echo ("Connection failed.");
            //  . $e->getMessage()
        }
        finally
        {
            $conn=null;
        }                
    }
?>