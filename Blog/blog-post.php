<?php include'inc/header.php';?>
<?php 

if (!isset($_GET['postid']) || $_GET['postid'] == NULL) {
   
    echo "<script>window.location = 'index.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['postid'];
}

?>

    
        <!--Cover Image-->
        <section class="page-cover">
            <div class="container">
                <div class="center-title">
                        <h1>BLOG PAGE</h1>
               </div>
            </div>
        </section>
        
        <!-- PAGE CONTENT -->
        <section class="page">
            <div class="container">
                <div class="row">
                    <div class="page-content col-md-9">
                        <div class="blog-content">

                             <?php 

                               $query = "select * from tbl_post where id='$id'";
                               $getdata = $db->select($query);
                               if ($getdata) {
                               while ($result = $getdata->fetch_assoc()) {

                              ?>

                            <div class="blog-image">
                                <img src="admin/<?php echo $result['image'];?>" alt=""> 
                            </div>
                            <h1 class="top_30"><?php echo $result['title'];?> </h1>
                            <span class="blog-data"><?php echo $result['author'];?> - <?php echo $fm->formateDate($result['date']);?></span>
                            <p><?php echo $result['body']; ?></p> 
                        <?php } } ?>
                        </div> 
                        <!-- Comments --> 
                        <div class="col-md-12 blog-comments top_60">
                            <div class="row">
                                <div class="widget-title">
                                    <h2>COMMENTS (3) </h2>
                                </div>
                                <ul class="comments">
                                    <?php 

                                       $query = "select * from tbl_comments where postid='$id'";
                                       $getdata = $db->select($query);
                                       if ($getdata) {
                                       while ($result = $getdata->fetch_assoc()) {

                                      ?>
                                    <li>
                                        <img src="images/person.png" alt="">
                                        <div class="comment-info">
                                            <h3><?php echo $result['name'];?></h3>
                                            <a href="#"> REPLY </a>
                                            <p><?php echo $result['comments'];?></p>
                                            <span><?php echo $fm->formateDate($result['date']);?></span>
                                        </div>
                                    </li>
                                   <?php } } ?>
                                    <li class="reply">
                                        <img src="images/person.png" alt="">
                                        <div class="comment-info">
                                            <h3>Darren D. Miller</h3>
                                            <a href="#"> REPLY </a>
                                            <p>Up is opinion message manners correct hearing husband my. Disposing commanded dashwoods cordially depending at at. Its strangers who you certainty earnestly resources suffering she. </p>
                                            <span>Sep 26, 2016 at 14:35</span>
                                        </div>
                                    </li>
                                    <li class="replytoreply">
                                        <img src="images/person.png" alt="">
                                        <div class="comment-info">
                                            <h3>Mary R. Peterson</h3>
                                            <a href="#"> REPLY </a>
                                            <p>Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected conviction out.</p>
                                            <span>Sep 26, 2016 at 14:35</span>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- Write a Comment -->
                        <div class="col-md-12 post-write-comment top_60">
                            <div class="row">
                                <div class="widget-title">
                                    <h2>WRITE A COMMENT</h2>
                                </div>


                        <?php 

                             if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                $name= $_POST['name'];
                                $email= $_POST['email'];
                                $comments= $_POST['comments'];
                                $name = mysqli_real_escape_string($db->link,$name);
                                $email = mysqli_real_escape_string($db->link,$email);
                                $comments = mysqli_real_escape_string($db->link,$comments);
                                if (empty($name) || empty($email) || empty($comments)) {
                                    echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
                                }else{

                                    $query= " INSERT INTO tbl_comments (name,postid,email,comments) VALUES ('$name','$id','$email','$comments') ";
                                    $catinsert= $db->insert($query);
                                    if ($catinsert) {
                                        
                                        echo "<span style='color:green;font-size:18px;'> Comments successfully send...</span>";
                                    }else{

                                       echo "<span style='color:red;font-size:18px;'>Comments not successfully send...</span>";
                                    }
                                }

                         
                            }
                        ?>



                                <form  action="" method="POST" >
                                    <div class="row">
                                        <!-- name -->
                                        <div class="col-md-6"><input  name="name" class="form-input requie" type="text" placeholder="Name"></div>
                                        <!-- email -->
                                        <div class="col-md-6"><input  name="email" class="form-input requie" type="text" placeholder="Email"></div>
                                        <!--message-->
                                        <div class="col-md-12">
                                            <textarea  name="comments" class="form-text requie" placeholder="Message" rows="8"></textarea>
                                        </div>
                                        <input  class="giggs_button2" type="submit" value="SEND A MESSAGE">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RIGHT SIDEBAR -->
                    <div class="sidebar col-md-3">
                        <div class="row">
                            <!-- sidebar content -->
                            <!-- Categories -->
                            <div class="col-md-12 widget-categories">
                                <div class="widget-title">
                                    <h2>CATEGORIES</h2> </div>
                                <ul class="top_15">
                                    <?php 

                                       $query = "select * from tbl_catagory";
                                       $getdata = $db->select($query);
                                       if ($getdata) {
                                       while ($result = $getdata->fetch_assoc()) {
                                     ?>

                                   <li><a href="postbycategory.php?catid=<?php echo $result['id'];?>"><?php echo $result['name'];?></a></li>

                                    <?php } } ?>
                                </ul>
                            </div>
                            <!-- Tweet -->
                            <div class="col-md-12 widget-twitter top_45">
                                <div class="widget-title">
                                    <h2>LATEST TWEETS</h2> </div>
                                <div class="tweet"></div> 
                                <a href="https://twitter.com/envato" target="_blank" class="twitter-account">@envato</a> 
                            </div>
                            <!-- Banner -->
                            <div class="col-md-12 widget-banner top_45">
                                <img src="images/banner.jpg" alt="">
                            </div>
                            <!-- Latest Posts -->
                            <div class="col-md-12 widget-posts top_45">
                                <div class="widget-title">
                                    <h2>LATEST POSTS</h2>
                                </div>
                                <ul class="sidebar-posts">
                                    <?php 

                                       $query = "select * from tbl_post limit 4";
                                       $getdata = $db->select($query);
                                       if ($getdata) {
                                       while ($result = $getdata->fetch_assoc()) {

                                      ?>
                                        <li>
                                            <div class="tags"> <a href="#">#design </a> <a href="#">#interface </a> </div>
                                            <a class="post-content" href="blog-post.php?postid=<?php echo $result['id'];?>">
                                                
                                                  <p><?php echo $fm->textShorten($result['body'],100); ?></p> 
                                                <span class="date-comment">26 Comments |<?php echo $result['author'];?> - <?php echo $fm->formateDate($result['date']);?></span> 

                                            </a>
                                        </li>

                                    <?php } } ?>
                                    
                                </ul>
                            </div>
                            <!-- Tags -->
                            <div class="col-md-12 widget-tags top_45">
                                <div class="widget-title">
                                    <h2>TAGS</h2> </div>
                                <ul class="top_15">
                                    <li><a href="#">Interface Design</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                    <li><a href="#">After Effect</a></li>
                                    <li><a href="#">Application</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
     <?php include'inc/footer.php';?>