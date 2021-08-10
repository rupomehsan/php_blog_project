<?php include_once'inc/header.php';?>
<?php include'inc/sitebar.php';?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New page</h2>

<?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = mysqli_real_escape_string($db->link,$_POST['name']);
        $body = mysqli_real_escape_string($db->link,$_POST['body']);
    



        if ($name == "" || $name == "" ) {
           echo "<span style='color:red;font-size:18px;'>field must not be empty</span>";
        }

         else{
          
            $query = "INSERT INTO tbl_page (name,body) 
            VALUES('$name','$body')";
           
            $inserted_rows = $db->insert($query);

            if ($inserted_rows) {
            echo "<span style='color:green;font-size:18px;'>Post insert successfully</span>";
            }else {
             echo "<span style='color:red;font-size:18px;'>Post not insert successfully</span>";
            }
   
       }







      }
 ?>



                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." class="medium" name="name" />
                            </td>
                        </tr>
                     
                    
                   
                    
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
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

 