<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>

<?php 

if (isset($_GET['delser'])) {
	$delid=$_GET['delser'];
	$delquery = " delete from tbl_service where ser_id='$delid' ";
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
							<th>service Name</th>
							<th>service desc</th>
							<th>service image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 

                        $query= "select * from tbl_service order by ser_id desc ";
                        $getdata = $db->select($query);
                        if ($getdata) {
                        	
                        	$i=0;
                        	while ($result = $getdata->fetch_assoc()) {
                        		
                        		$i++;

					  ?>
					
						<tr class="even gradeC">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['ser_heding']; ?></td>
							<td><?php echo $result['ser_descripsion']; ?></td>
							<td><img src="<?php echo $result['ser_image']; ?>" height= "20" width= "30"alt=""></td>
							<td><a href="editservice.php?serid=<?php echo $result['ser_id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to delete data?')" href="?delser=<?php echo $result['ser_id']; ?>">delete</a></td>
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
  