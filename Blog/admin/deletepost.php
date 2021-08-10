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

if (!isset($_GET['delpostid']) || $_GET['delpostid'] == NULL) {
   
    echo "<script>window.location = 'catlist.php';</script>";
    

}else{

    $postid= $_GET['delpostid'];
    $query = "select * from tbl_post where id='$postid'";
    $getData = $db->select($query);
    if ($getData) {

    	while ($delimg = $getData->fetch_assoc()) {
    		$dellink = $delimg['image'];
    		unlink($dellink);
    	}
    	
    }
    
    $delquery = "delete from tbl_post where id='$postid'";
    $delData = $db->delete( $delquery);
    if ($delData) {
    	
    	echo "<script>alert('Data delete successfully.');</script>";
    	echo "<script>window.location = 'postlist.php';</script>";

    }else{

    	echo "<script>alert('Data not deleted.');</script>";
    	echo "<script>window.location = 'postlist.php';</script>";
    }


}

?>
