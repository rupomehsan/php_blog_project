<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>

<?php 

if (!isset($_GET['msgid']) || $_GET['msgid'] == NULL) {
   
    echo "<script>window.location = 'inbox.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['msgid'];
}

?>




        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Edit massage</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        echo "<script>window.location = 'inbox.php';</script>";
    
      }
 ?>



                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">

                <?php 

                $query= "select * from tbl_contact where id='$id'";
                $msg = $db->select($query);
                if ($msg) {
                while ($result = $msg->fetch_assoc()) {
                ?>




                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $result['name'];?> " class="medium" name="name" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Phone</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $result['phone'];?>" class="medium" name="name" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $result['email'];?>" class="medium" name="email" />
                            </td>
                        </tr>
                     
                    
                   
                    
                       
                        <tr>
                            <td>
                                <label>date</label>
                            </td>
                            <td>
                                <input  readonly type="text" value="<?php echo $fm->formateDate($result['date']);?>" class="medium" name="date" />
                            </td>
                        </tr>

                           <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Massage</label>
                            </td>
                            <td>
                                <textarea readonly class="tinymce" name="body">
                                    <?php echo $result['body']?>
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

 