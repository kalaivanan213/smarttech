<?php
include"database.php";
?>
<html>
<style>
input[type=text],[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
<body>
<?php
if(isset($_POST["submit"]))
{
	$sql="insert into users(UNAME,UMOBILE,UPASSWORD) values ('{$_POST["uname"]}','{$_POST["umobile"]}','{$_POST["upassword"]}')";
	if($db->query($sql))
	{
		echo"sucess";
	}
		else{
			echo"failure";
		}
}
?>
<h1>Registration from</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<label>Name</label><br>
<input type="text" name="uname" placeholder="Enter your name" required><br>
<label>Mobile</label><br>
<input type="text" name="umobile" placeholder="Enter mobile number"><br>
<label>Password</label><br>
<input type="password" name="upassword" Placeholder="Enter password"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
