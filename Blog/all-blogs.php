<?php include'inc/header.php';?>
         <section class="page-cover">
            <div class="container">
                <div class="center-title">
                        <h1>ALL BLOG PAGE</h1>
               </div>
            </div>
        </section>
    <div class="container">
    <div class="row  allblogpage">
          <?php 

           $query = "select * from tbl_post";
           $getdata = $db->select($query);
           if ($getdata) {
           while ($result = $getdata->fetch_assoc()) {

         ?>
    	<div class="col-md-4">
    		<div class="blog-box"> <img src="admin/<?php echo $result['image'];?>" alt="">
                   <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                   <h4><?php echo $result['title'];?></h4>
                    <p><?php echo $fm->textShorten($result['body'],200); ?></p> 
                    <a href="blog-post.php?postid=<?php echo $result['id'];?>" class="blog-link"> READ MORE</a>
                </div>
            </div>
    	</div>
         <?php } } ?>
    	
    </div>

  </div>
<?php include'inc/footer.php';?>