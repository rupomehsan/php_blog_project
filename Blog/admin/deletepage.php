<?php
include '../lib/Session.php';
Session::chechSession();
?>

<?php
include '../config/config.php';
include '../lib/Database.php';
include '../helpers/formate.php';
?>


<?php

$db= new Database();

?>

<?php 

if (!isset($_GET['delpage']) || $_GET['delpage'] == NULL) {
   
    echo "<script>window.location = 'index.php';</script>";
    

}else{

    $pagetid= $_GET['delpage'];  
    $delquery = "delete from tbl_page where id='$pagetid'";
    $delData = $db->delete( $delquery);
    if ($delData) {
    	
    	echo "<script>alert('Data delete successfully.');</script>";
    	echo "<script>window.location = 'index.php';</script>";

    }else{

    	echo "<script>alert('Data not deleted.');</script>";
    	echo "<script>window.location = 'index.php';</script>";
    }


}

?>
