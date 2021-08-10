<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Service</h2>
               <div class="block copyblock"> 


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
            echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
        }

         else{

            move_uploaded_file($tempname,$folder.$image);
            move_uploaded_file($tempname2,$folder2.$image2);
            move_uploaded_file($tempname3,$folder3.$image3);
            move_uploaded_file($tempname4,$folder4.$image4);
            move_uploaded_file($tempname5,$folder5.$image5);
            move_uploaded_file($tempname6,$folder6.$image6);

            $query= " INSERT INTO tbl_portfolio (title,descripsion,category,image,image_2,image_3,image_4,image_5,image_6) VALUES ('$title','$descripsion','$category','$image','$image2','$image3','$image4','$image5','$image6')";
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
                                  <label>Portfilo Title:</label>
                                </td>
                            <td>
                                <input type="text" placeholder="Enter Service Name..." class="" name="title" />
                            </td>
                        </tr>
                        <tr>
                                 <td>
                                  <label>Portfolio descripsion:</label>
                                </td>
                            <td>
                                <input type="text" placeholder="Enter Service link..." class="" name="descripsion" />
                            </td>
                        </tr>
                           <td>
                            <label>Portfolio Catergory:</label>
                          </td>
                           <td>
                                <select type="password" placeholder="" class="medium" name="category">
                                
                                    <option>Select user role</option>
                                    <option value="0">Web design</option>
                                    <option value="1">Applications</option>
                                    <option value="2">Development</option>
                                 


                                </select>
                            </td>

                        
                      
                         <tr>
                            <td>
                                <label>Upload Image one</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imageone" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image two</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imagetwo" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image three</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imagethree" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image four</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imagefour" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image five</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imagefive" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Upload Image six</label>
                            </td>

                            <td>
                                
                                <input type="file" name="imagesix" />
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
                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>