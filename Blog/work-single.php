<?php include'inc/header.php';?>
<?php 

if (!isset($_GET['protid']) || $_GET['protid'] == NULL) {
   
    echo "<script>window.location = 'index.php';</script>";
    
    //header("Location:catlist.php");

}else{

    $id= $_GET['protid'];
}

?>
    
        <!--Cover Image-->
        <section class="page-cover">
            <div class="container">
                <div class="center-title">
                        <h1>SINGLE WORK</h1>
                    </div>
            </div>
        </section>
        <!-- PAGE CONTENT -->
        <section class="page">
            <div class="container">
                <div class="row">
                    <div class="page-content col-md-12">
                        <?php 

                           $query = "select * from tbl_portfolio where id = '$id'";
                           $getdata = $db->select($query);
                           if ($getdata) {
                               while ($result = $getdata->fetch_assoc()) {

                        ?>
                       <div class="works-info">
                            <h2 class="work-title"><?php echo $result['title'];?></h2>
                            <p> <?php echo $result['descripsion'];?>  </p>
                            <ul class="works-informations">
                                <li><span>Client:</span> People Client</li>
                                <li><span>Category:</span>
                                   <?php

                                  if ($result['category']== 0 ) {
                                     echo "Web design";
                                   }elseif ($result['category']== 1) {
                                     echo "Applications";
                                   }else{
                                    echo "Development";
                                   }


                                  ?>
                                 </li>
                                <li><span>Date:</span> <?php echo $fm->formateDate($result['date']);?></li>
                                <li>www.picard.com</li>
                            </ul>
                        </div>
                        <div class="row">
                             <div class="col-md-12 works-image top_60">
                                <img src="admin/upload/<?php echo $result['image'];?>" alt="">
                            </div>
                            <div class="col-md-6 works-image">
                                <img src="admin/upload/<?php echo $result['image_2'];?>" alt="">
                            </div>
                            <div class="col-md-6 works-image">
                                <img src="admin/upload/<?php echo $result['image_3'];?>" alt="">
                            </div>
                            <div class="col-md-6 works-image">
                                <img src="admin/upload/<?php echo $result['image_4'];?>" alt="">
                            </div>
                            <div class="col-md-6 works-image">
                                <img src="admin/upload/<?php echo $result['image_5'];?>" alt="">
                            </div>
                            <div class="col-md-12 works-image">
                                <img src="admin/upload/<?php echo $result['image_6'];?>" alt="">
                            </div>
                        </div>
                    </div>

                <?php } } ?>

                </div>
            </div>
        </section>
        
        <!-- FOOTER -->

<?php include'inc/footer.php';?>