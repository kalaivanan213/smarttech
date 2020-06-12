<?php
include"database.php";
session_start();
?>
<!DOCTYPE html>
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

				if(isset($_POST["login"]))
				{
					$sql="select * from users where UNAME='{$_POST["uname"]}' and UPASSWORD='{$_POST["upass"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["UID"]=$ro["UID"];
						$_SESSION["UNAME"]=$ro["UNAME"];
						
						echo "<script>window.open('uinfo.php','_self');</script>";
					}
					else
					{
						echo "Invalid Username or Password";
					}
					
				}
			
?>
    
        <header>User Login</header>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
         
          
            <input type="text" name="uname" required placeholder="User name">
         
            <input type="password" name="upass"  required placeholder="Password"><br>
            
		 


            <input type="submit" name="login" value="LOGIN">
          
</form>
<div class="login"></div>




  </body>
</html>
