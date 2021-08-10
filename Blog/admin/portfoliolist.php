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
							<th>Por Title</th>
							<th>Por desc</th>
							<th>Por cat</th>
							<th>Por img1</th>
							<th>Por img2</th>
							<th>Por img3</th>
							<th>Por img4</th>
							<th>Por img5</th>
							<th>Por img6</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

					<?php 

                        $query= "select * from tbl_portfolio order by id desc ";
                        $getdata = $db->select($query);
                        if ($getdata) {
                        	
                        	$i=0;
                        	while ($result = $getdata->fetch_assoc()) {
                        		
                        		$i++;

					  ?>
					
						<tr class="even gradeC">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['title']; ?></td>
							<td><?php echo $fm->textShorten($result['descripsion'],20); ?></td>
							<td>

								<?php

								  if ($result['category']== 0 ) {
								  	 echo "Web design";
								   }elseif ($result['category']== 1) {
								   	 echo "Applications";
								   }else{
								   	echo "Development";
								   }


								  ?>
								
							</td>
							<td><img src="upload/<?php echo $result['image']; ?>" height= "20" width= "30"alt=""></td>
							<td><img src="upload/<?php echo $result['image_2']; ?>" height= "20" width= "30"alt=""></td>
							<td><img src="upload/<?php echo $result['image_3']; ?>" height= "20" width= "30"alt=""></td>
							<td><img src="upload/<?php echo $result['image_4']; ?>" height= "20" width= "30"alt=""></td>
							<td><img src="upload/<?php echo $result['image_5']; ?>" height= "20" width= "30"alt=""></td>
							<td><img src="upload/<?php echo $result['image_6']; ?>" height= "20" width= "30"alt=""></td>
							<td><a href="editportfolio.php?portid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to delete data?')" href="?delser=<?php echo $result['id']; ?>">delete</a></td>
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
  