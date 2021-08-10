<?php include'inc/header.php';?>
    <section class="home" id="home">
        <div class="home-content home-profile">
            <div class="profile-img"> <img src="images/profile-2.jpg" alt=""> </div>
            <h1> <span class="element" data-text1="  RUPOM   EHSAN  " data-text2="" data-loop="true" data-backdelay="3000"></span></h1> <a class="home-down bounce" href="#about"></a>
            
            
            <h1>  <span class="element" data-text1="  " data-text2="Full Stack Web Developer" data-loop="true" data-backdelay="3000"></span></h1> <a class="home-down bounce" href="#about"><i class="fa fa-chevron-down"></i></a>
            
            
            <!-- Social Icons -->
            <ul class="home-social">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>  </a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  </a> </li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i>  </a></li>
            </ul>
        </div>
    </section>
    <!--ABOUT-->
    <section class="about line-bg " id="about">
        <div class="container">
            <div class="row">
                  <?php 

                     $query = "select * from tbl_user where role = '0' ";
                     $about = $db->select($query);
                      if ($about) {
               
                        while ($result = $about->fetch_assoc()) {


                    ?>
                <!-- Profile Image -->
                <div class="col-md-4 profile"> <img src="admin/<?php echo $result['image'];?>" alt=""> </div>
                <!-- About Information -->
                <div class="col-md-8 about-info top_30">
                    <div class="left-title">
                        <h1>ABOUT ME</h1> </div>
                  
                    <p><?php echo $result['detailse'];?></p>
                    <ul class="col-md-12 giggs-list">
                        <li><span>Name : </span><?php echo $result['name'];?></li>
                        <li><span>Date of Birthday : </span><?php echo $result['date_of_birth'];?></li>
                        <li><span>Website : </span><a href= "https://mdrupomehsan.com/"><?php echo $result['website'];?></a></li>
                        <li><span>Email : </span><?php echo $result['email'];?></li>
                        <li><span>FaceBook : </span>Rupom Ehsan</li>
                        <li><span>Address : </span><?php echo $result['address'];?></li>
                    </ul>
                   <!--  <div class="social">
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  </a> 
                     <a href="#"><i class="fa fa-behance" aria-hidden="true"></i>  </a> 
                     <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i>  </a> 
                    </div> -->
                   <?php } } ?>
                    <a href="" title=""><button class="giggs_button top_15">DOWNLOAD CV</button></a>
                </div>
            </div>
        </div>
    </section>
    <div class="my_features line-bg" id="skills">
        <div class="container">
            <div class="row">
                 <h1>MY SERVICESS</h1>
                <!-- clean design -->
                <?php 

                   $query = "select * from tbl_service";
                   $getdata = $db->select($query);
                   if ($getdata) {
                       while ($result = $getdata->fetch_assoc()) {

                ?>
                <div class="feature col-md-4 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="feat-icon"> <img src="admin/<?php echo $result['ser_image'];?>" height="30" width="40" alt=""> </div>
                        <div class="feat-text"> <span><?php echo $result['ser_heding'];?></span>
                            <p><?php echo $result['ser_descripsion'];?></p>
                        </div>
                    </div>
                </div>
              <?php } } ?>
                <!-- branding -->
               
            </div>
        </div>
    </div>
    <!--PORTFOLIO-->
    <section class="portfolio dotted-bg" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="center-title">
                    <h1>MY PORTFOLIO</h1>
                    <div class="portfolio_filter">
                        <ul>
                            <li class="select-cat" data-filter="*">All</li>
                            <li data-filter=".web-design">Web Design</li>
                            <li data-filter=".aplication">Applications</li>
                            <li data-filter=".development">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 top_30">
                    <div class="isotope_items row">
                        <!-- Item -->
                        <div class="single_item link development col-md-4 col-sm-6">
                            <?php 

                               $query = "select * from tbl_portfolio where category = '2'";
                               $getdata = $db->select($query);
                               if ($getdata) {
                                   while ($result = $getdata->fetch_assoc()) {

                            ?>
                            <div class="work-inner">
                                <div class="work-overlay">
                                    <div class="overlay-in">
                                        <div class="work-info">
                                            <p><?php echo $result['title'];?></p>
                                            <div class="work-links"> <a href="work-single.php?protid=<?php echo $result['id'];?>" class="link"><i data-icon="5" class="icon"></i></a> <a href="admin/upload/<?php echo $result['image'];?>" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                        </div>
                                    </div>
                                </div> 
                                <img src="admin/upload/<?php echo $result['image'];?>" alt=""> 
                            </div>
                            
                            <?php } } ?>


                        </div>
                        <!-- Item -->
                          <div class="single_item link aplication col-md-4 col-sm-6">
                            <?php 

                               $query = "select * from tbl_portfolio where category = '1'";
                               $getdata = $db->select($query);
                               if ($getdata) {
                                   while ($result = $getdata->fetch_assoc()) {

                            ?>
                            <div class="work-inner">
                                <div class="work-overlay">
                                    <div class="overlay-in">
                                        <div class="work-info">
                                            <p><?php echo $result['title'];?></p>
                                            <div class="work-links"> <a href="work-single.php?protid=<?php echo $result['id'];?>" class="link"><i data-icon="5" class="icon"></i></a> <a href="admin/upload/<?php echo $result['image'];?>" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                        </div>
                                    </div>
                                </div> 
                                <img src="admin/upload/<?php echo $result['image'];?>" alt=""> 
                            </div>
                            
                            <?php } } ?>


                        </div>
                       
                      

                         <div class="single_item link web-design col-md-4 col-sm-6">
                            <?php 

                               $query = "select * from tbl_portfolio where category = '0'";
                               $getdata = $db->select($query);
                               if ($getdata) {
                                   while ($result = $getdata->fetch_assoc()) {

                            ?>
                            <div class="work-inner">
                                <div class="work-overlay">
                                    <div class="overlay-in">
                                        <div class="work-info">
                                            <p><?php echo $result['title'];?></p>
                                            <div class="work-links"> <a href="work-single.php?protid=<?php echo $result['id'];?>" class="link"><i data-icon="5" class="icon"></i></a> <a href="admin/upload/<?php echo $result['image'];?>" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                        </div>
                                    </div>
                                </div> 
                                <img src="admin/upload/<?php echo $result['image'];?>" alt=""> 
                            </div>
                            
                            <?php } } ?>


                        </div>

                  
                    </div>
                </div>
                <div class="portfolio-btn"> <a href="works.html" class="giggs_button top_30">LOAD MORE</a> </div>
            </div>
        </div>
    </section>
    <!-- BLOG -->
    <section class="blog dotted-bg" id="blog">
        <div class="container">
            <div class="center-title">
                <h1>FEATURED BLOGS</h1>
                <p>We diminution preference thoroughly if. Joy deal pain view much her time. Led young gay would now state. Pronounce we attention admitting on assurance of suspicion conveying</p>
            </div>
            <div class="owl-carousel owl-blog" data-items="3" data-autoplay="7000" data-pagination="true">
                <!-- audio blog -->
                 <?php 

                       $query = "select * from tbl_post";
                       $getdata = $db->select($query);
                       if ($getdata) {
                       while ($result = $getdata->fetch_assoc()) {

                    ?>
                    <div class="col-md-12 item">
                    
                    <div class="blog-box">
                        <div class="blog-media"> <img src="admin/<?php echo $result['image'];?>" alt=""> <i class="fa fa-volume-up" aria-hidden="true"></i> </div>
                        <div class="col-md-12 blog-info"> <span class="data"><?php echo $result['author'];?> - <?php echo $fm->formateDate($result['date']);?></span>
                            <h4><?php echo $result['title'];?></h4>
                            <p><?php echo $fm->textShorten($result['body'],200); ?></p> 
                            <a href="blog-post.php?postid=<?php echo $result['id'];?>" class="blog-link"> READ MORE</a>
                        </div>
                    </div>
              
                  </div>
            <?php } } ?>
                <!-- gallery blog -->
               
              
            </div>
         
              <div class="portfolio-btn"> <a href="all-blogs.php" class="giggs_button top_30">LOAD MORE</a> </div>
        </div>
    </section>
    <!-- CLIENTS -->
    <div class="clients line-bg">
        <div class="container">
            <div class="owl-carousel" data-items="6" data-autoplay="2500" data-pagination="false">
                <div class="item"><img src="images/client-1.jpg" alt=""></div>
                <div class="item"><img src="images/client-2.jpg" alt=""></div>
                <div class="item"><img src="images/client-3.jpg" alt=""></div>
                <div class="item"><img src="images/client-4.jpg" alt=""></div>
                <div class="item"><img src="images/client-5.jpg" alt=""></div>
                <div class="item"><img src="images/client-6.jpg" alt=""></div>
                <div class="item"><img src="images/client-1.jpg" alt=""></div>
                <div class="item"><img src="images/client-2.jpg" alt=""></div>
                <div class="item"><img src="images/client-3.jpg" alt=""></div>
                <div class="item"><img src="images/client-4.jpg" alt=""></div>
                <div class="item"><img src="images/client-5.jpg" alt=""></div>
                <div class="item"><img src="images/client-6.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="center-title">
                    <h1>GET IN TOUCH</h1>
                    <p>We diminution preference thoroughly if. Joy deal pain view much her time. Led young gay would now state. Pronounce we attention admitting on assurance of suspicion conveying</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <!-- contact-informations -->
                        <div class=" col-md-12 contact-information top_45">
                            <div class="col-md-4 contact-info text-center"> <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>49 0216 514 25 25
                                    <br>0216 514 25 25</p>
                            </div>
                            <div class="col-md-4 contact-info text-center"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p>107 Santa Monica Boulevard Los Angeles, California</p>
                            </div>
                            <div class="col-md-4 contact-info text-center"> <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>info@alberto.com
                                    <br/> contact@alberto.com</p>
                            </div>
                        </div>
                        <!-- form -->
                    
                         <div class="showmassage col-md-8">
                               <?php 

                             if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                $name= $_POST['name'];
                                $phone= $_POST['phone'];
                                $email= $_POST['email'];
                                $massage= $_POST['massage'];

                                $name = mysqli_real_escape_string($db->link,$name);
                                $phone = mysqli_real_escape_string($db->link,$phone);
                                $email = mysqli_real_escape_string($db->link,$email);
                                $massage = mysqli_real_escape_string($db->link,$massage);
                                if (empty($name) || empty($email) || empty($massage)) {
                                    echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
                                  
                                     echo "<script>window.location = 'index.php#contact';</script>";
                                }else{

                                    $query= " INSERT INTO tbl_contact (name,phone,email,body) VALUES ('$name','$phone','$email','$massage') ";
                                    $catinsert= $db->insert($query);
                                    if ($catinsert) {
                                        
                                        echo "<span style='color:green;font-size:18px;'> Massage successfully send...</span>";
                                        echo "<script>window.location = 'index.php#contact';</script>";
                                    }else{

                                       echo "<span style='color:red;font-size:18px;'>Massage not successfully send...</span>";
                                    }
                                }

                         
                            }
                        ?>
                         </div>
                        <form class="col-md-offset-2 col-md-8  " method="POST" action="">
                            <div class="row">
                                <!-- name -->
                                <div class="col-md-6">
                                    <input id="con_name" name="name" class="form-input requie" type="text" placeholder="Name">
                                </div>
                                 <div class="col-md-6">
                                    <input id="phone" name="phone" class="form-input requie" type="number" placeholder="Phone">
                                </div>
                                <!-- email -->
                                <div class="col-md-12">
                                    <input id="con_email" name="email" class="form-input requie" type="email" placeholder="Email">
                                </div>
                                <!--message-->
                                <div class="col-md-12">
                                    <textarea id="con_message" name="massage" class="form-text requie" placeholder="Message" rows="8"></textarea>
                                </div>
                                <input  class="giggs_button2" type="submit" value="SEND A MESSAGE"> </div>
                        </form>

                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  <?php include'inc/footer.php';?>