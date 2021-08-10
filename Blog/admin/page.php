<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
<style>
 .actiondel{
    border: 1px solid #ddd;
    color: #444;
    cursor: pointer;
    font-size: 16px;
    padding: 2px 10px;
 }   
</style>

<?php 

if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
   
    echo "<script>window.location = 'index.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['pageid'];
}

?>



        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Edit pages</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = mysqli_real_escape_string($db->link,$_POST['name']);
        $body = mysqli_real_escape_string($db->link,$_POST['body']);
    



        if ($name == "" || $body == "" ) {
           echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
        }

         else{
          
            $query= " update tbl_page set name='$name',body='$body' where id='$id' ";
            $updaterow= $db->update($query);

            if ($updaterow) {
            echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
            }else {
             echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
            }
   
       }



      }
 ?>



                <div class="block">   

<?php 

$query= "SELECT * FROM tbl_page where id='$id' ";

$pages = $db->select($query);
if ($pages) {

while ($result = $pages->fetch_assoc()) {


?>


                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['name']?>" class="medium" name="name" />
                            </td>
                        </tr>
                     
                    
                   
                    
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                    
                                    value="<?php echo $result['body']?>"
                                </textarea>
                            </td>
                        </tr>
                        
                     
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="update" />
                                <span class="actiondel"><a onclick="return confirm('Are you sure to delete the page?')" href="deletepage.php?delpage=<?php echo $result['id'];?>" title="">Delete</a></span>
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

 