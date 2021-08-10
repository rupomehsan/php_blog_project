<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 

$userid = Session::get('userid');
$userrole = Session::get('userRole');

?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Post</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = mysqli_real_escape_string($db->link,$_POST['name']);
        $username = mysqli_real_escape_string($db->link,$_POST['username']);
        $email = mysqli_real_escape_string($db->link,$_POST['email']);
        $detailse = mysqli_real_escape_string($db->link,$_POST['detailse']);
        $date_of_birth = mysqli_real_escape_string($db->link,$_POST['date_of_birth']);
        $website = mysqli_real_escape_string($db->link,$_POST['website']);
        $address = mysqli_real_escape_string($db->link,$_POST['address']);
        
        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;


        if ($name == "" || $email == "" || $detailse == "" || $address == "" || $uploaded_image == "") {
           echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
           }else{

       
          if (!empty($file_name)) {

             if ($file_size >1048567) {
             echo "<span class='error'>Image Size should be less then 1MB!
             </span>";

            } elseif (in_array($file_ext, $permited) === false) {
             echo "<span class='error'>You can upload only:-"
             .implode(', ', $permited)."</span>";
            }

            else{
                move_uploaded_file($file_temp, $uploaded_image);
               
               $query ="update tbl_user set name='$name',username='$username',email='$email',detailse='$detailse',date_of_birth='$date_of_birth',website='$website',address='$address',image='$uploaded_image'
                 
                 where id='$userid' " ;
               
                $updated_row = $db->update($query);

                if ($updated_row) {
                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                }else {
                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                }
       
              }

             }else{
               
                $query ="update tbl_user set name='$name',username='$username',email='$email',detailse='$detailse',date_of_birth='$date_of_birth',website='$website',address='$address'
                 
                 where id='$userid' " ;
               
                $updated_row = $db->update($query);

                if ($updated_row) {
                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                }else {
                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                }

             }

          }

     }

    


      
 ?>



                <div class="block">    

<?php 

$query= "select * from tbl_user where id='$userid' AND role='$userrole' ";
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
                                <input type="text" value="<?php echo $postresult['name']; ?>" class="medium" name="name" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Date Of Birth</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $postresult['date_of_birth']; ?>" class="medium" name="date_of_birth" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $postresult['username']; ?>" class="medium" name="username" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Website</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $postresult['website']; ?>" class="medium" name="website" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $postresult['email']; ?>" class="medium" name="email" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Address</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $postresult['address']; ?>" class="medium" name="address" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>

                            <td>
                                 <img src="<?php echo $postresult['image']; ?>" alt="" height="100px" width="130px"/><br/>
                                <input type="file" name="image" />
                            </td>
                        </tr>

                         <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Detailse</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="detailse">
                                    
                                    <?php echo $postresult['detailse']; ?>
                                </textarea>
                            </td>
                        </tr>
                     
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
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

 