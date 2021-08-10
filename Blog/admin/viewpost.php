<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 

if (!isset($_GET['viewposttid']) || $_GET['viewposttid'] == NULL) {
   
    echo "<script>window.location = 'postlist.php';</script>";
    

}else{

    $postid= $_GET['viewposttid'];
}

?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Post</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

       echo "<script>window.location = 'postlist.php';</script>";


      }
 ?>



                <div class="block">    

<?php 

$query= "select * from tbl_post where id='$postid' order by id desc ";
$getpost = $db->select($query);
if ($getpost) {
while ($postresult = $getpost->fetch_assoc()) {

?>






                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['title']; ?>" class="medium" name="title" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select readonly id="select" name="cat">
                                <option >select catagory</option>
                                <?php 

                                    $query = "select * from tbl_catagory ";
                                    $category =$db->select( $query);
                                    if ( $category) {
                                       while($result=$category->fetch_assoc()){
                                  

                                ?>

                                <option
                                  
                                  <?php 
                                      if ($postresult['cat'] == $result['id']) { ?>
                                   
                                   selected ="selected"

                                  <?php } ?> value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?>

                                </option>
                              

                            <?php } } ?>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Date Picker</label>
                            </td>
                            <td>
                                <input readonly type="text" id="date-picker" value="<?php echo $postresult['date']; ?>"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>

                            <td>
                                 <img src="<?php echo $postresult['image']; ?>" alt="" height="80px" width="120px"/>
                              
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                       <textarea readonly class="tinymce" name="body"><?php echo $postresult['body']; ?></textarea>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Tags </label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['tags']; ?>" name="tags" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Author </label>
                            </td>
                            <td>
                                <input readonly type="text" value="<?php echo $postresult['author']; ?>" class="medium" name="author" />

                                 <input type="hidden" value="<?php echo Session::get('userid')?>" class="medium" name="userid" />
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

<?php } }?>


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

 