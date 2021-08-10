<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>

<?php 

if (!isset($_GET['portid']) || $_GET['portid'] == NULL) {
   
    echo "<script>window.location = 'catlist.php';</script>";

}else{

    $id= $_GET['portid'];
}

?>



        <div class="grid_10">
        
            <div class="box round first grid">
            <h2>Add New Service</h2>

            <?php 

                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $title= $_POST['title'];
                    $descripsion= $_POST['descripsion'];
                    $category= $_POST['category'];

                    $image=$_FILES ['imageone']['name'];
                    $tempname=$_FILES['imageone']['tmp_name'];
                    $folder='upload/';

                    $image2=$_FILES ['imagetwo']['name'];
                    $tempname2=$_FILES['imagetwo']['tmp_name'];
                    $folder2='upload/';

                    $image3=$_FILES ['imagethree']['name'];
                    $tempname3=$_FILES['imagethree']['tmp_name'];
                    $folder3='upload/';

                    $image4=$_FILES ['imagefour']['name'];
                    $tempname4=$_FILES['imagefour']['tmp_name'];
                    $folder4='upload/';

                    $image5=$_FILES ['imagefive']['name'];
                    $tempname5=$_FILES['imagefive']['tmp_name'];
                    $folder5='upload/';

                    $image6=$_FILES ['imagesix']['name'];
                    $tempname6=$_FILES['imagesix']['tmp_name'];
                    $folder6='upload/';

                    if (empty($title) || empty($descripsion)) {
                       echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
                    }else{

                   
                       if (!empty($image) ) {

                            if ($image >1048567) {
                             echo "<span class='error'>Image Size should be less then 1MB!
                             </span>";

                            }

                             else{

                                    move_uploaded_file($tempname,$folder.$image);
                                   
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image='$image' where id='$id' " ;

                               
                                $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                            } elseif ( !empty($image2) ) {

                                if ($image >1048567) {
                                 echo "<span class='error'>Image Size should be less then 1MB!
                                 </span>";

                                }

                             else{

                                   
                                    move_uploaded_file($tempname2,$folder2.$image2);
                                   
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image_2='$image2' where id='$id' " ;

                               
                                $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                        } elseif ( !empty($image3) ) {

                                if ($image >1048567) {
                                 echo "<span class='error'>Image Size should be less then 1MB!
                                 </span>";

                                }

                             else{

                                   
                                    move_uploaded_file($tempname3,$folder3.$image3);
                            
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image_3='$image3' where id='$id' " ;

                               
                                   $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                         }elseif ( !empty($image4) ) {

                                if ($image >1048567) {
                                 echo "<span class='error'>Image Size should be less then 1MB!
                                 </span>";

                                }

                             else{

                                 
                                    move_uploaded_file($tempname4,$folder4.$image4);
                                  
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image_4='$image4' where id='$id' " ;

                               
                                $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                        }elseif ( !empty($image5) ) {

                                if ($image >1048567) {
                                 echo "<span class='error'>Image Size should be less then 1MB!
                                 </span>";

                                }

                             else{

                                 
                                    move_uploaded_file($tempname5,$folder5.$image5);
                                  
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image_5='$image5' where id='$id' " ;

                               
                                $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                        }elseif ( !empty($image6) ) {

                                if ($image >1048567) {
                                 echo "<span class='error'>Image Size should be less then 1MB!
                                 </span>";

                                }

                             else{

                                 
                                    move_uploaded_file($tempname6,$folder6.$image6);
                                  
                               
                                   $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category',image_6='$image6' where id='$id' " ;

                               
                                $updated_row = $db->update($query);

                                if ($updated_row) {
                                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                                }else {
                                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                                }
                       
                             }

                        }



                         else{
                               
                                $query =" update tbl_portfolio set title='$title',descripsion='$descripsion',category='$category' where id='$id' " ;
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



            <div class="block copyblock"> 

            <?php 
            $query= " select * from tbl_portfolio where id='$id'";
            $category = $db->select($query);
            if ($category) {
            while ($result = $category->fetch_assoc()) {
            ?>

                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">  
                    <div class="divone">
                                   
                            <tr>
                                <td>
                                  <label>Portfilo Title:</label>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $result['title'];?>" class="" name="title" />
                                </td>
                            </tr>
                            <tr>
                                     <td>
                                      <label>Portfolio descripsion:</label>
                                    </td>
                                <td>
                                    <input type="text"  value="<?php echo $result['descripsion'];?>" class="" name="descripsion" />
                                </td>
                            </tr>
                               <td>
                                <label>Portfolio Catergory:</label>
                              </td>
                               <td>
                                    <select type="password" placeholder="" class="medium" name="category">
                                    
                                        <option>Select user role</option>
                        <option <?php if ($result['category'] == 0 ) { ?> selected ="selected" <?php } ?> value="0">Web design</option>
                        <option <?php if ($result['category'] == 1 ) { ?> selected ="selected" <?php } ?> value="1">Applications</option>
                        <option <?php if ($result['category'] == 2 ) { ?> selected ="selected" <?php } ?> value="2">Development</option>

                                    </select>
                                </td>

                            
                          
                             <tr>
                                <td>
                                    <label>Upload Image one</label>
                                </td>

                                <td>
                                    <img src="upload/<?php echo $result['image'];?>" height= "80" width= "90"alt=""><br>
                                    <input type="file" name="imageone" value="<?php echo $result['image'];?>" />
                                </td>
                            </tr>
                    </div> 
                    <div class="divtwo"> 
                          <tr>
                            <td>
                                <label>Upload Image two</label>
                            </td>

                            <td>
                                 <img src="upload/<?php echo $result['image_2'];?>" height= "80" width= "90"alt=""><br>
                                <input type="file" name="imagetwo" value="<?php echo $result['image_2'];?>" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image three</label>
                            </td>

                            <td>
                                 <img src="upload/<?php echo $result['image_3'];?>" height= "80" width= "90"alt=""><br>
                                <input type="file" name="imagethree" value="<?php echo $result['image_3'];?>" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image four</label>
                            </td>

                            <td>
                                 <img src="upload/<?php echo $result['image_4'];?>" height= "80" width= "90"alt=""><br>
                                <input type="file" name="imagefour" value="<?php echo $result['image_4'];?>" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image five</label>
                            </td>

                            <td>
                                 <img src="upload/<?php echo $result['image_5'];?>" height= "80" width= "90"alt=""><br>
                                <input type="file" name="imagefive" value="<?php echo $result['image_5'];?>" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image six</label>
                            </td>

                            <td>
                                 <img src="upload/<?php echo $result['image_6'];?>" height= "80" width= "90"alt=""><br>
                                <input type="file" name="imagesix" value="<?php echo $result['image_6'];?>" />
                            </td>
                        </tr>
                        
                        <tr> 
                          <td>
                                
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                  </div>
                    </table>
                    </form>

            <?php } }?>

                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>