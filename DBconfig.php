<?php

$con=mysqli_connect ("localhost", "root", "", "logindb") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'logindb');
?>



