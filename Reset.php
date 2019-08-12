<?php

require ('DBconfig/DBconfig.php');

?>
<!DOCTYPE html>
<html>

    <head>

        <title style = "font-family: Corbel">LogIn</title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

    
        
        <div id="main-wrapper">

            <center>
            
            <br><h2 style = "font-family: Corbel">New Password</h2><br>
                

            </center>

            <form class="myform" action="index.php" method="post">
                
                
                <label style = "font-family: Corbel"><b>Password</label><br>
                <input name = "password" type="password" class="inputvalues" placeholder="Enter Ppassword"/><br><br>

                <label style = "font-family: Corbel"><b>Confrim Password</label><br>
                <input name="cpassword" type="password" class="inputvalues" placeholder="Confrim our password"required/><br><br>
                
                <input name = "Confrim" style = "font-family: Corbel" type="submit" id="confrim_btn" value="Confrim"/><br>
                <a href="index.php"><input style = "font-family: Corbel" type="button" id="back_btn" value="<<Back to Login"/></a>
            
            </form>
            <?php
                if(isset($_POST['change']))
                {

                    $email=$_SESSION['email'];
                    $password =$_POST['password'];
                    $cpassword = $_POST['cpassword'];

                    if($password==$cpassword)
                    {

                        $query = "UPDATE user SET password = '$password' WHERE Email = '$email'";
                        $result=mysqli_query($con, $querry);
                        if ($result=TRUE) 
                            {
                                echo "<script>if(confirm('Password Reset Sucessfully.')){document.location.href='login.php'};</script>";                               
                            }
                            else
                            {
                                echo '<script language="javascript"> alert("Password Reset Unsucessfully.")</script>';
                            }
                        }
                        else 
                        {
                            {
                                echo '<script language="javascript"> alert("Password does not matched")</script>';
                            }
                        }






                }






            ?>

       </div>

    

    </body>

</html>