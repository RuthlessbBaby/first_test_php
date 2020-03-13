<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'MausamDahal');
   define('DB_DATABASE', 'daiko');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM loginwala WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         // session_register("myusername");
         // $_SESSION['login_user'] = $myusername;
         //
         // header("location: welcome.php");
	 header("location: menu.php");
      }else {
         $error = "Your Login Name or Password is invalid";
	 echo $error;
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> LOGIN </title>
	<link rel="stylesheet" href="style.css">
	<!-- <script src="https://kit.fontawesome.com/7d9463b8e9.js" crossorigin="anonymous"></script> -->
</head>
<body>
	<div class="apple">
		<div class="loginform">
			<div class="title">
				LOGIN FORM
			</div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<div class="input-form username">
					<input type="text" name="username" class="input-username" placeholder="Username">
					<i class="fas fa-user"></i>
				</div>
				<div class="input-form password">
					<input type="password" name="password" class="input-password" placeholder="Password">
					<i class="fas fa-key"></i>
				</div>
				<div class="button">
					<input type="submit" text="Login"/>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
