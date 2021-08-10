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
<title>Recover password</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">

    <?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     	
     	$email = $fm->validation($_POST['email']);
     	
     	$email = mysqli_real_escape_string($db->link,$email);


        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
         
         echo "<span style='color:red;font-size:18px;'>invelid email</span>";

         }else{


        $mailquery= "select * from tbl_user where email ='$email' limit 1 ";
        $mailchechk = $db->select($mailquery);
     	if ($mailchechk != false) {
     	 
         while  ($value  = $mailchechk->fetch_assoc()) {

            $userid = $value['id'];
            $username = $value['username'];
            }

           $text = substr($email,0,3);
           $rand = rand(10000,99999);
           $newpass = "$text$rand";
           $password = md5($newpass);
            $query ="update tbl_user 
            set


            password='$password'

            where id='$userid' " ;
               
            $updated_row = $db->update($query);
            $to = "$email";
            $from = "rupomehsan34@gmail.com";
            $headers = 'From: $from\n';
            $headers .= 'MIME-Version: 1.0';
            $headers .= 'Content-type: text/html; charset=iso-8859-1';
            $subject = "your password";
            $message = "your username is ".$username."and password is ".$newpass."please visit website with login";

            $sendmail =mail($to,$subject,$message,$headers);

                if ($updated_row) {
                echo "<span style='color:green;font-size:18px;'>please check your email for new password..</span>";
                }else {
                 echo "<span style='color:red;font-size:18px;'>Pmail not send</span>";
                }


     		
          } else{
     			echo "<span style='color:red;font-size:18px;'>email not exist !!</span>";
     		  }

          }


       }

    ?>



		<form action="" method="post">
			<h1>Recover password</h1>
			<div> 
                
				<input type="text" placeholder="Enter your valid email"  name="email"/>
			</div>
			
			<div>
				<input type="submit" name="login"value="Send" />
			</div>
		</form><!-- form -->
            <div class="button">
            <a href="login.php">loging</a>
        </div>
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>