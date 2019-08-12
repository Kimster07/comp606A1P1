<?php
    require 'DBconfig/DBconfig.php';
    mysqli_select_db($con,'logindb');
?>
<!DOCTYPE html>


<html>

    <head>
        
        <title style = "font-family: Corbel">Registration</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    
    <body>

        
        
        <div id="main-wrapper">
            
            <center>
                <h2 style = "font-family: Corbel">Registration Form</h2><br>
            </center>

            <form class="myform" action="Registration.php" method="post">

                <label style = "font-family: Corbel"><b>Name</label><br>
                <input name="name" type="text" class="inputvalues" placeholder="Enter your name" required/><br><br>

                <label style = "font-family: Corbel"><b>E-mail</label><br>
                <input name="email" type="email" class="inputvalues" placeholder="Enter your E-mail" required/><br><br>

                <label style = "font-family: Corbel"><b>Username</label><br>
                <input name="username" type="text" class="inputvalues" placeholder="Enter your username" required/><br><br>

                <label style = "font-family: Corbel"><b>Password</label><br>
                <input name="password" type="password" class="inputvalues" placeholder="Your password"required/><br><br>
                
                <label style = "font-family: Corbel"><b>Confrim Password</label><br>
                <input name="cpassword" type="password" class="inputvalues" placeholder="Confrim our password"required/><br><br>
                
                <input name="submit_btn" style = "font-family: Corbel" type="submit" id="signup_btn" value="Sign up"/><br><br>
                <a href="index.php"><input style = "font-family: Corbel" type="button" id="back_btn" value="<<Back to Login"/></a>
            
            </form>

        <?php
			if(isset($_POST['submit_btn']))
			{
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
				@$password = $_POST['password'];
				@$cpassword = $_POST['cpassword'];
				
				if($password == $cpassword)
				{
					$query = "SELECT * FROM userinfotable WHERE Username = '$username' OR Email = '$email'";
					//echo $query;
				    $query_run = mysqli_query($con, $query);
				 
					
					if(mysqli_num_rows($query_run)> 0)
					{
						echo '<script type = "text/javascript"> alert("This Username Already exists.. Please try another username!")</script>';
                    }
                    else
                    {
                        $query= "insert into userinfotable (Name, Email, Username, Password) values('$name', '$email', '$username', '$password')";
                        $query_run = mysqli_query($con, $query);

                        if($query_run=True)
                        {
                            echo'<script type="text/javascript"> alert("User Registered. Go to Login page to login.")(document.location.href="TY.php")</script>';
                        }
                        else
                        {
                            echo'<script type="text/javascript"> alert("Error!")</script>';
                        }
                       
                    }
                }
                else
                {
                    echo'<script type="text/javascript"> alert("Password and confrim password doesnot match.")</script>';   
                } 
            }
             
            ?>
        
        </div>
    
    
    
    </body>

</html>