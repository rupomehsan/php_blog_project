<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Service</h2>
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


         elseif ($file_size >1048567) {
         echo "<span class='error'>Image Size should be less then 1MB!
         </span>";

        } elseif (in_array($file_ext, $permited) === false) {
         echo "<span class='error'>You can upload only:-"
         .implode(', ', $permited)."</span>";
        }

         else{
            move_uploaded_file($file_temp, $uploaded_image);
            $query= " INSERT INTO tbl_service (ser_heding,ser_descripsion,ser_image) VALUES ('$name','$descripsion','$uploaded_image')";
            $catinsert= $db->insert($query);
            if ($catinsert) {
                
                echo "<span style='color:green;font-size:18px;'> service insert success</span>";
            }else{

               echo "<span style='color:red;font-size:18px;'>service not insert</span>";
            }
   
          }

       
        }

      ?>


                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">                    
                        <tr>
                                <td>
                                  <label>Service name:</label>
                                </td>
                            <td>
                                <input type="text" placeholder="Enter Service Name..." class="" name="name" />
                            </td>
                        </tr>

                         <tr>
                                 <td>
                                
                                    <label>Service Descripsion:</label>
                                </td>
                            <td>
                            <textarea class="tinymce"  name="descripsion"></textarea>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Upload Icone</label>
                            </td>

                            <td>
                                
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>