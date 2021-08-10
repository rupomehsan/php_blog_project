<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/owl.theme.css" />
<link rel="stylesheet" href="css/owl.carousel.css" />
<link rel="stylesheet" href="css/magnific-popup.css" />
<link rel="stylesheet" href="css/perfect-scrollbar.css" />
<link rel="stylesheet" href="css/style.css" />

<?php 

$query= "select * from tbl_theme where id='1' ";
$theme = $db->select($query);
while ($result = $theme->fetch_assoc()){

	if ($result['theme'] == 'default') { ?>

		<link rel="stylesheet" href="theme/default.css">
		
	  <?php } elseif ($result['theme'] == 'green') { ?>

	  	<link rel="stylesheet" href="theme/green.css">

	  <?php } elseif ($result['theme'] == 'red') { ?>

	  	 <link rel="stylesheet" href="theme/red.css">

	<?php } } ?>