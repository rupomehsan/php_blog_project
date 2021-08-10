<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 

if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
   
    echo "<script>window.location = 'catlist.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['catid'];
}

?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 


     <?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name= $_POST['name'];
        $name = mysqli_real_escape_string($db->link,$name);
        if (empty($name)) {
            echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
        }else{

            $query= " update tbl_catagory set name='$name' where id='$id' ";
            $updaterow= $db->update($query);
            if ($updaterow) {
                
                echo "<span style='color:green;font-size:18px;'> Category update success</span>";
            }else{

               echo "<span style='color:red;font-size:18px;'>Category not update</span>";
            }
        }
      }
        ?>

<?php 
$query= " select * from tbl_catagory where id='$id' order by id desc";
$category = $db->select($query);
if ($category) {
while ($result = $category->fetch_assoc()) {
?>


                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['name']?>" class="medium" name="name" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="update" />
                            </td>
                        </tr>
                    </table>
                    </form>

<?php } }?>

                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>