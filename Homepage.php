<?php
session_start();

?>
<!DOCTYPE html>
<html>

    <head>

        <title style = "font-family: Corbel">Home Page</title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

    <header>
        
        <div id="main-wrapper">

            <center>

                <h2 style = "font-family: Corbel">Home page</h2>
                <br><h3 style = "font-family: Corbel">Welcome <?php echo $_SESSION['username'] ?> </h3><br>
                <img src="blank profile picture.png" class="avatar"/><br>

            </center>

            <form class="myform" action="Homepage.php" method="post">
                
            <br><a href="index.php"><input style = "font-family: Corbel" type="button" id="logout_btn" value="Log Out"/></a><br>
            
            </form>

       </div>

    </header>

    </body>

</html>