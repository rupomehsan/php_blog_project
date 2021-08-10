<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>



        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 


     <?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $theme = mysqli_real_escape_string($db->link,$_POST['theme']);

            $query= " update tbl_theme set theme='$theme' where id='1' ";
            $updaterow= $db->update($query);
            if ($updaterow) {
                
                echo "<span style='color:green;font-size:18px;'> theme update success</span>";
            }else{

               echo "<span style='color:red;font-size:18px;'>theme not update</span>";
            }
        }
   
        ?>


<?php 

$query= "select * from tbl_theme where id='1' ";
$theme = $db->select($query);
while ($result = $theme->fetch_assoc()){

?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input <?php if ($result['theme']== 'default'){echo "checked";}?> type="radio" v class="medium" name="theme" value="default" />default
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input <?php if ($result['theme']== 'green'){echo "checked";}?> type="radio" v class="medium" name="theme" value="green" />green
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input <?php if ($result['theme']== 'red'){echo "checked";}?> type="radio" v class="medium" name="theme" value="red" />red
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="chnage" />
                            </td>
                        </tr>
                    </table>
                    </form>

<?php } ?>

                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>