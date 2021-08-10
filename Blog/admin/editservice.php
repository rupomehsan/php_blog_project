<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 

if (!isset($_GET['serid']) || $_GET['serid'] == NULL) {
   
    echo "<script>window.location = 'catlist.php';</script>";
    //header("Location:catlist.php");
}else{

    $id= $_GET['serid'];
}

?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 


     <?php 

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $name= $_POST['name'];
                $descripsion= $_POST['descripsion'];
                $name = mysqli_real_escape_string($db->link,$name);
                $descripsion = mysqli_real_escape_string($db->link,$descripsion);

                $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "upload/".$unique_image;

                if (empty($name) || empty($descripsion)) {
                    echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
                }


               else{

       
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

                          

                           $query ="update tbl_service set ser_heding='$name',ser_descripsion='$descripsion',ser_image='$uploaded_image'
                             
                             where ser_id='$id' " ;
                           
                            $updated_row = $db->update($query);

                            if ($updated_row) {
                            echo "<span style='color:green;font-size:18px;'>Service update successfully</span>";
                            }else {
                             echo "<span style='color:red;font-size:18px;'>Service not update successfully</span>";
                            }
                   
                          }

                         }else{
                           
                            $query ="update tbl_service set ser_heding='$name',ser_descripsion='$descripsion'
                             
                             where ser_id='$id' " ;
                           
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



            <?php 
            $query= " select * from tbl_service where ser_id='$id' order by ser_id desc";
            $category = $db->select($query);
            if ($category) {
            while ($result = $category->fetch_assoc()) {
            ?>

             <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">                    
                        <tr>
                                <td>
                                  <label>Service name:</label>
                                </td>
                            <td>
                                <input type="text" value="<?php echo $result['ser_heding'];?>" class="" name="name" />
                            </td>
                        </tr>

                         <tr>
                                 <td>
                                
                                    <label>Service Descripsion:</label>
                                </td>
                            <td>
                              
                                 <textarea class="tinymce" name="descripsion">
                                    <?php echo $result['ser_descripsion'];?>
                                 </textarea>
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <img src="<?php echo $result['ser_image'];?>" height="40px" width="50px" alt=""><br/>
                                <label>Upload Icone</label>
                            </td>

                            <td>
                                
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        
                        <tr> 
                            <td>
                               
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                      </table>
                    </form>

<?php } }?>

                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>