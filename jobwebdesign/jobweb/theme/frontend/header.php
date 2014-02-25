<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="theme/frontend/styles/style.css">
</head>
<body>

	<div id="main-wrapper">
		<div id="header">
			<a href="#"></a>
			<div id="controlbox">


				<div id="btnLink" class="login">
					<a href="#">Login</a>
				</div>

					<div id="loginForm">
				
						<form>
							<label for="username">Username: </label>  
							<input type="text" name="username" id="username">
							<label for="pass">Password: </label>
							<input type="password" name="pass" id="pass">
							<input type="submit" value="Login">
						</form>
					</div>

			</div>

			
		 

		</div>
		<?php 
			$active = $_GET["page"] != "" ? $_GET["page"] : "";
		?>

		<ul id="menu">
			<li><a href="index.php"<?php echo $active == "home" ? "class='active'" : ""?>>Home</a></li>
			<li><a href="?page=about" <?php echo $active == "about" ? "class='active'" : ""?> >About us</a></li>
			<li><a href="?page=pastorprofile" <?php echo $active == "pastorprofile" ? "class='active'" : ""?> >Pastors Profile</a></li>
			<li ><a href="?page=missionary" <?php echo $active == "missionary" ? "class='active'" : ""?>>Missionary Profile</a><li>
			<li ><a href="#">Gallery</a><li>
			<li ><a href="#">Transaction</a><li>
		</ul>

		<div id ="news">
			<img src="theme/frontend/styles/1.jpg" alt="Klematis" width="1024" height="300">

			
		</div>


		<div id="joblist">