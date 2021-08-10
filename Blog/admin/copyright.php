<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>


<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$copyright= $fm->validation($_POST['copyright']);



$copyright = mysqli_real_escape_string($db->link,$_POST['copyright']);


if ($copyright == ""  ) {
           echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
        }
        else{

               $query ="update tbl_copyright
                 set

                  text='$copyright'
                 
                  
                  where id='1' " ;
               
                $updated_row = $db->update($query);

                if ($updated_row) {
                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                }else {
                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                }

        }








}
?>








<?php 

$query= "SELECT * FROM tbl_copyright where id= '1' ";

$blog_title = $db->select($query);
if ($blog_title) {

while ($result = $blog_title->fetch_assoc()) {


?>



                <div class="block copyblock"> 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['text']; ?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>

            <?php } } ?>
            </div>
        </div>
  
<?php include'inc/footer.php';?>
