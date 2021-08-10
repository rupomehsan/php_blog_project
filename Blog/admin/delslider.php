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

if (!isset($_GET['sliderid']) || $_GET['sliderid'] == NULL) {
   
    echo "<script>window.location = 'Sliderlist.php';</script>";
    

}else{

    $sliderid= $_GET['sliderid'];
    $query = "select * from tbl_slider where id='$sliderid'";
    $getData = $db->select($query);
    if ($getData) {

    	while ($delimg = $getData->fetch_assoc()) {
    		$dellink = $delimg['image'];
    		unlink($dellink);
    	}
    	
    }
    
    $delquery = "delete from tbl_slider where id='$sliderid'";
    $delData = $db->delete( $delquery);
    if ($delData) {
    	
    	echo "<script>alert('Data delete successfully.');</script>";
    	echo "<script>window.location = 'Sliderlist.php';</script>";

    }else{

    	echo "<script>alert('Data not deleted.');</script>";
    	echo "<script>window.location = 'Sliderlist.php';</script>";
    }


}

?>
