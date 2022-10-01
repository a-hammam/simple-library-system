<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Login Page</title>
</head>
<style>
	body{
		background-color: darkcyan;
	}
	input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
	
input[type=password] {
  border: 2px solid red;
  border-radius: 4px;
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

</style>
<body>
	<center>
	<form  method="post">
		<div class="login-box">
			<br><br><br>
			<h1>Admin Login</h1>

			<div class="textbox">
			
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
			<br><br><br>
				
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>
			<br><br>
			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</center>
</body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
$adminname = $_POST['adminname'];
$password = $_POST['password'];
require_once('admins_database.php');
$sql= "SELECT * FROM adminlogin WHERE adminname = '$adminname' AND password = '$password' ";
$result = mysqli_query($db,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
header('location:enter_login.php');
}else{
	
echo '<script type="text/JavaScript"> 
     alert("Incorrect valid name or password");
     </script>'
;

}
}
?>