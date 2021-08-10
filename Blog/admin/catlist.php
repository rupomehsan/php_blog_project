<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>

<?php 

if (isset($_GET['delcat'])) {
	$delid=$_GET['delcat'];
	$delquery = " delete from tbl_catagory where id='$delid' ";
	$deldata =$db->delete($delquery);
	if ($deldata) {
		
		echo "<span style='color:green;font-size:18px;'>data delete success</span>";
	}else{
		echo "<span style='color:red;font-size:18px;'>data not delete success</span>";
	}
}


?>


                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 

                        $query= "select * from tbl_catagory order by id desc ";
                        $category = $db->select($query);
                        if ($category) {
                        	
                        	$i=0;
                        	while ($result = $category->fetch_assoc()) {
                        		
                        		$i++;

					  ?>
					
						<tr class="even gradeC">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="editcat.php?catid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to delete data?')" href="?delcat=<?php echo $result['id']; ?>">delete</a></td>
						</tr>


                       <?php } } ?>

					</tbody>
				</table>
               </div>
            </div>


<script type="text/javascript">

$(document).ready(function () {
setupLeftMenu();

$('.datatable').dataTable();
setSidebarHeight();


});
</script>
<?php include'inc/footer.php';?>
  