<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="admin_login.css">
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
<script>
  function validateForm() {
  var x = document.forms["myForm"]["adminname"].value;
  var y = document.forms["myForm"]["password"].value;
  if (x == "" || x==null) {
    alert("Please enter name of admin ");
    return false;
  }
  if (y == "" || y==null) {
    alert("Please enter password of admin");
    return false;
  }
  alert ("New admin added")
}
</script>
<body>
	<center>
	<form method="post" onsubmit="return validateForm()" name="myForm" class ="a">
		<div class="login-box">
			<h1>Add new admin </h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Add">
		</div>
	</form>
</center>
</body>

<?php
 
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];
    require_once('admins_database.php');
  $query = "insert into adminlogin(adminname,password) values('$adminname','$password')"; //Insert query to add book details into the book_info table
  $result = mysqli_query($db,$query);
    header('location:enter_login.php');
}
?>