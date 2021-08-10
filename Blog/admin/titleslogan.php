<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
<style>
.leftsite{float:left;width:70%;} 
.rightsite{float:left;width:20%;}
.rightsite img{height: 160px;width: 170px;} 
</style>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>


<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title= $fm->validation($_POST['title']);
        $slogan= $fm->validation($_POST['slogan']);

        $title = mysqli_real_escape_string($db->link,$_POST['title']);
        $slogan = mysqli_real_escape_string($db->link,$_POST['slogan']);
       
      

    
      
        $permited  = array('jpg', 'jpeg', 'png');
        $file_name = $_FILES['logo']['name'];
        $file_size = $_FILES['logo']['size'];
        $file_temp = $_FILES['logo']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $same_image ='logo'.'.'.$file_ext;
        $uploaded_image = "upload/".$same_image;

        if ($title == "" || $slogan == "" ) {
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
               
                $query =" update title_slogan
                 set 
               
                 title='$title',
                 slogan='$slogan',

                 logo='$uploaded_image'

                 where id='1' " ;
               
                $updated_row = $db->update($query);

                if ($updated_row) {
                echo "<span style='color:green;font-size:18px;'>Post update successfully</span>";
                }else {
                 echo "<span style='color:red;font-size:18px;'>Post not update successfully</span>";
                }
       
           }
        }else{
               
                $query ="update title_slogan
                 set

                  title='$title',
                  slogan='$slogan'
                  where id='1' " ;
               
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

                $query= "SELECT * FROM title_slogan where id= '1' ";

                $blog_title = $db->select($query);
                if ($blog_title) {
               
                while ($result = $blog_title->fetch_assoc()) {
           

           ?>
                <div class="block sloginblock">   
                <div class="leftsite">        
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['title']; ?>"  name="title" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['slogan']; ?>" name="slogan" class="medium" />
                            </td>
                        </tr>
						  <tr>
                            <td>
                                <label>Upload Logo</label>
                            </td>
                            <td>
                                <input type="file" name="logo" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>

                      </div> 

                      <div class="rightsite">
                          <img src="<?php echo $result['logo']; ?>" alt="logo" name="logo">
                      </div> 

                  <?php } } ?>
                </div>
            </div>
        </div>
   <?php include'inc/footer.php';?>