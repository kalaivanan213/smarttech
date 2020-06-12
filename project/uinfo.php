<?php
include"database.php";


session_start();
if(!isset($_SESSION["UID"]))
{
header("location:ulogin.php");}


?>
<html>

	
<body>
<h3>Welcome <?php echo $_SESSION["UNAME"]; ?></h3>
</body>
</html>