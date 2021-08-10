<?php include_once'inc/header.php';?>
<?php include_once'inc/sitebar.php';?>



        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>

<?php 

if (isset($_GET['seenid'])) {

$seenid= $_GET['seenid'];

$query =" update tbl_contact

          set

          status ='1'

          where id='$seenid' " ;
       
        $updated_row = $db->update($query);

        if ($updated_row) {
        echo "<span style='color:green;font-size:18px;'>Massage successfully to the seen box </span>";
        }else {
         echo "<span style='color:red;font-size:18px;'>something in rong</span>";
        }


}


?>

                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php 

$query= "select * from tbl_contact where status='0' order by id desc ";
$msg = $db->select($query);
if ($msg) {
$i=0;
while ($result = $msg->fetch_assoc()) {
$i++;
?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><?php echo $fm->textShorten($result['body'],30);?></td>
							<td><?php echo $fm->formateDate($result['date']);?></td>
							<td>
							<a href="viewmsg.php?msgid=<?php echo $result['id'];?>">View</a> ||
							<a href="replymsg.php?msgid=<?php echo $result['id'];?>">Reply</a>||
							 <a onclick="return confirm('Are you send to to seen box ?')" href="?seenid=<?php echo $result['id'];?>">Seen

							</td>
<?php } } ?>

						</tr>
						
					</tbody>
				</table>
               </div>
            </div>


               <div class="box round first grid">
                <h2>seen massage</h2>

<?php 

if (isset($_GET['delid'])) {
	$delid=$_GET['delid'];
	$delquery = " delete from tbl_contact where id='$delid' ";
	$deldata =$db->delete($delquery);
	if ($deldata) {
		
		echo "<span style='color:green;font-size:18px;'>Message delete success</span>";
	}else{
		echo "<span style='color:red;font-size:18px;'>Message not delete success</span>";
	}
}


?>





                <div class="block">        
                          <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
							<?php 

							$query= "select * from tbl_contact where status='1' order by id desc ";
							$msg = $db->select($query);
							if ($msg) {
							$i=0;
							while ($result = $msg->fetch_assoc()) {
							$i++;
							?>
							<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><?php echo $fm->textShorten($result['body'],30);?></td>
							<td><?php echo $fm->formateDate($result['date']);?></td>
							<td>
							<a href="viewmsg.php?msgid=<?php echo $result['id'];?>">View</a> ||
							<a onclick="return confirm('Are you send to to seen box ?')" href="?delid=<?php echo $result['id'];?>">Delete</a> 

							</td>
<?php } } ?>

						</tr>
						
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
