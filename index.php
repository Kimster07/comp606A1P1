<?php
session_start();
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
            
            <img src="blank profile picture.png" class="avatar"/><br>
            <br><h2 style = "font-family: Corbel">Login Form</h2><br>
                

            </center>

            <form class="myform" action="index.php" method="post">
                
                <label style = "font-family: Corbel"><b>Username</label><br>
                <input name = "username" type="text" class="inputvalues" placeholder="Enter username"/><br><br>
                
                <label style = "font-family: Corbel"><b>Password</label><br>
                <input name = "password" type="password" class="inputvalues" placeholder="Enter Ppassword"/><br><br>

                <p><a style = "font-family: Corbel" href ="Forgot.php">Forgot Password?</a></p>
                
                <input name = "login" style = "font-family: Corbel" type="submit" id="login_btn" value="Login"/><br>
                <br><p> Not a member? <a href="Registration.php"> Sign Up </a> </p>
            
            </form>

            <?php
            if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
                @$password=$_POST['password'];
            
                $query = "SELECT * FROM userinfotable WHERE username='$username'and password='$password' ";


                $result = mysqli_query($con ,$query) or die("Database Error!");
                $query_run = mysqli_num_rows($result);
               
               
                if($query_run==1)
                {
                  $_SESSION['username']=$username;
               // $_SESSION['sucess']="you are now logged in";
                  header('location: Homepage.php');
                }
               
                else
                {
                    echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                }
               
            }
            ?>

       </div>

    

    </body>

</html>