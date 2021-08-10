<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No</th>
							<th>Post title</th>
							<th>Description</th>
							<th>Category</th>
							<th>Image</th>
							<th> Author</th>
							<th>Tags</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 

$query= "select tbl_post.*, tbl_catagory.name from tbl_post inner join tbl_catagory on tbl_post.cat = tbl_catagory.id order by tbl_post.title desc ";
$post = $db->select($query);
if ($post) {
$i=0;
while ($result = $post->fetch_assoc()) {
$i++;
?>



<tr class="odd gradeX">
	<td><?php echo $i;?></td>
	<td><?php echo $result['title'];?></td>
	<td><?php echo $fm->textShorten($result['body'],50) ;?></td>
	<td class="center"><?php echo $result['name'];?></td>
	<td><img src="<?php echo $result['image'];?>" height="40px" width="60px"/></td>
	<td><?php echo $result['author'];?></td>
	<td><?php echo $result['tags'];?></td>
	<td class="center"><?php echo $fm->formateDate($result['date']);?></td>
	<td>
	
	 <a href="viewpost.php?viewposttid=<?php echo $result['id'];?>">view</a>
	 ||
<?php 
  
if (Session::get('userid')== $result['userid'] || Session::get('userRole') == '0') { ?>
	
   
   <a href="editpost.php?ediposttid=<?php echo $result['id'];?>">Edit</a>

	 || <a  onclick="return confirm('Are you sure to delete data?')" href="deletepost.php?delpostid=<?php echo $result['id'];?>">Delete</a>
	<?php } ?>
	   
	</td>
</tr>

<?php } }?>		
						
					</tbody>
				</table>
	
               </div>
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
