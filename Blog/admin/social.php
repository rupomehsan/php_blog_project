<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fb= $fm->validation($_POST['fb']);
$tw= $fm->validation($_POST['tw']);
$ln= $fm->validation($_POST['fb']);
$gp= $fm->validation($_POST['gp']);


$fb = mysqli_real_escape_string($db->link,$_POST['fb']);
$tw = mysqli_real_escape_string($db->link,$_POST['tw']);
$ln = mysqli_real_escape_string($db->link,$_POST['ln']);
$gp = mysqli_real_escape_string($db->link,$_POST['gp']);

if ($fb == "" || $tw == ""  || $ln == ""  || $gp == "" ) {
           echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
        }
        else{

               $query ="update tbl_social
                 set

                  fb='$fb',
                  tw='$tw',
                  ln='$ln',
                  gp='$gp'
                  
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

                $query= "SELECT * FROM tbl_social where id= '1' ";

                $blog_title = $db->select($query);
                if ($blog_title) {
               
                while ($result = $blog_title->fetch_assoc()) {
           

           ?>


                <div class="block">               
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="fb" value="<?php echo $result['fb']; ?>"class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="tw" value="<?php echo $result['tw']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="ln" value="<?php echo $result['ln']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="gp" value="<?php echo $result['gp']; ?>" class="medium" />
                            </td>
                        </tr>

						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>


                    </table>
                    </form>

            <?php } } ?>

                </div>
            </div>
        </div>
      <?php include'inc/footer.php';?>