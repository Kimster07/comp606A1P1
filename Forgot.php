<?php
    require 'DBconfig/DBconfig.php';
?>
<!DOCTYPE html>
<html>

    <head>    
        <title style = "font-family: Corbel">Password Reset</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    
    <body>

        
        
        <div id="main-wrapper">
            
            <center>
                <h2 style = "font-family: Corbel">Password Reset</h2><br>
            </center>

            <form class="myform" action="Reset.php" method="post">

                <label style = "font-family: Corbel"><b>Enter E-mail</label><br>
                <input name="name" type="text" class="inputvalues" placeholder="Enter your E-mail" required/><br><br>

                
                
                <input name="reset_btn" style = "font-family: Corbel" type="submit" id="reset_btn" value="Reset"/><br><br>
                <a href="index.php"><input style = "font-family: Corbel" type="button" id="back_btn" value="<<Back to Login"/></a>
            
            </form>
            <?php
            if(isset($_POST['forgot']))
            {
                $email=$_POST['email'];

                $query = "SELECT * FROM userinfotable WHERE Email = '$email'";
                //echo $query;
                $result = mysqli_query($con, $query);
                $query_run = mysqli_num_rows($result);
             
                
               
                if($query_run == 1)
                {
                  $_SESSION['Email'] = $email;

                  header('location: Reset.php');
                }
               
                else
                {
                    echo '<script type="text/javascript">alert("Invalid E-mail")</script>';
                }
               
            }
            ?>

                    
        </div>
    
    
    
    </body>

</html>