<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>User  List</h2>

<?php 

if (isset($_GET['deluser'])) {
	$delid=$_GET['deluser'];
	$delquery = " delete from tbl_user where id='$delid' ";
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
							<th> Name</th>
							<th>user Name</th>
							<th>Email</th>
							<th>Detailse</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 

                        $query= "select * from tbl_user order by id desc ";
                        $alluser = $db->select($query);
                        if ($alluser) {
                        	
                        	$i=0;
                        	while ($result = $alluser->fetch_assoc()) {
                        		
                        		$i++;

					  ?>
					
						<tr class="even gradeC">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['username']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $result['detailse']; ?></td>
							<td>
							<?php

                             if ($result['role'] == '0') {

                             	echo "Admin";

                             }elseif ($result['role'] == '1'){

                                echo "Author";

                             }elseif ($result['role'] == '2'){

                                echo "Editor";

                             }
	
							 ?>
							 	
							 </td>

							<td><a href="viewuser.php?userid=<?php echo $result['id']; ?>">View user</a>
<?php 

if (Session::get('userRole')== '0') { ?>

							 || <a onclick="return confirm('Are you sure to delete data?')" href="?deluser=<?php echo $result['id']; ?>">delete</a>

<?php } ?>

							</td>
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
  