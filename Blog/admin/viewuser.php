<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 

if (!isset($_GET['userid']) || $_GET['userid'] == NULL) {
   
    echo "<script>window.location = 'userlist.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['userid'];
}

?>



        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>User detailse</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        echo "<script>window.location = 'userlist.php';</script>";

     }



    


      
 ?>



                <div class="block">    

<?php 

$query= "select * from tbl_user where id='$id'  ";
$getuser = $db->select($query);
if ($getuser) {
while ($postresult = $getuser->fetch_assoc()) {

?>






                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['name']; ?>" class="medium" name="name" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['username']; ?>" class="medium" name="username" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['email']; ?>" class="medium" name="email" />
                            </td>
                        </tr>

                         <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Detailse</label>
                            </td>
                            <td>
                                <textarea readonly  name="detailse">
                                    
                                    <?php echo $postresult['detailse']; ?>
                                </textarea>
                            </td>
                        </tr>
                     
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="ok" />
                            </td>
                        </tr>
                    </table>
                    </form>

<?php } } ?>


                </div>
            </div>
        </div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
setupTinyMCE();
setDatePicker('date-picker');
$('input[type="checkbox"]').fancybutton();
$('input[type="radio"]').fancybutton();
});
</script>  
<?php include'inc/footer.php';?>

 