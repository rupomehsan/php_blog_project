<?php
include '../lib/Session.php';
Session::chechLogin();

?>

<?php
include '../config/config.php';
include '../lib/Database.php';
include '../helpers/formate.php';
?>


<?php

$db= new Database();
$fm= new Formate();

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">

    <?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     	
     	$username = $fm->validation($_POST['username']);
     	$password = $fm->validation(md5($_POST['password']));

     	$username = mysqli_real_escape_string($db->link,$username);
     	$password = mysqli_real_escape_string($db->link,$password);

     	$query = "select * from tbl_user where username='$username' and password='$password'";
     	$result= $db->select($query);
     	if ($result != false) {
     		$value   = mysqli_fetch_array($result);
     		
                Session::set("login",true);
                Session::set("username",$value['username']);
                Session::set("userid",$value['id']);
                Session::set("userRole",$value['role']);
                echo "<script>window.location = 'index.php';</script>";

     			
     		  }

     	      else{
     			echo "<span style='color:red;font-size:18px;'>username or password did not match !!</span>";
     		}
     }

    ?>



		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username"  name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="password"/>
			</div>
			<div>
				<input type="submit" name="login"value="Log in" />
			</div>
		</form><!-- form -->
            <div class="button">
            <a href="forgetpassword.php">Forgot password!!!</a>
        </div>
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>