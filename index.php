
<?php
		include "admin/connect.php";
    include "header.php";
?>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/11.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/22.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/33.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      

       <div class="cv">
        <div class="container">

        <h1 class="text-center">عالم البرمجة الاحترافي</h1>
        <h6 class="text-center">موقع غايته نشر المعلومة والمعرفة وآخر ماتوصل اليه العلم من تكنولوجيا</h6>
      </div>

       </div>

       <div class="news">
        <div class="container">

       
          <h1 class="text-center">الاخبار</h1>
          <?php
          $stmt = $con->prepare("SELECT * FROM news ");
          $stmt->execute();
          $articals = $stmt->fetchAll();
          foreach($articals as $artical) {
            ?>
             <div class="card col-md-3" >
            <img class="card-img-top" src="admin/uploads/imgs/<?php echo $artical['img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $artical['title']; ?></h5>
              <p class="card-text"><?php echo $artical['info']; ?></p>
              <a href="news.php?do=<?php echo  $artical['id'] ?>" class="btn btn-primary">التفاصيل</a>

            </div>   
       </div>


          <?php


          }

          ?>
                 <div class="clearfix"></div>

       
         
         
         
      </div>  
      </div>




     

      <div class="statas">
        <h1 class="text-center">احصاء الزيارات</h1>
        <div class="container"> 



        <?php
          $stmt = $con->prepare("SELECT * FROM statistic ");
          $stmt->execute();
          $articals = $stmt->fetchAll();
          foreach($articals as $artical) {
            ?>
                  

          <div class="row">
          <div class="col-md-4 text-center cor">
            <h4>عدد الدورات</h4>
            <h2><?php echo $artical['course']; ?></h2><span>دورة</span>
          </div>

          <div class="col-md-4 text-center cor">
            <h4> الشهادات الممنوحة</h4>
            <h2><?php echo $artical['certificate']; ?></h2><span>شهادة</span>

          </div>

          <div class="col-md-4 text-center">
            <h4>عدد المتدربين</h4>
            <h2><?php echo $artical['student']; ?></h2><span>متدرب</span>

          </div>
        </div>


        <?php


}

?>
        </div>



 
      </div>

     

     <div class="cv">
      <div class="container">

      <h1 class="text-center">عالم البرمجة الاحترافي</h1>
      <h6 class="text-center">موقع غايته نشر المعلومة والمعرفة وآخر ماتوصل اليه العلم من تكنولوجيا</h6>
    </div>

     </div>

     

     

<div class="artical">
  <div class="container">
        <h1 class="text-center">المقالات</h1>


        <?php
          $stmt = $con->prepare("SELECT * FROM articals ");
          $stmt->execute();
          $articals = $stmt->fetchAll();
          foreach($articals as $artical) {
            ?>
             <div class="card col-md-3" >
            <img class="card-img-top" src="admin/uploads/imgs/<?php echo $artical['img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $artical['title']; ?></h5>
              <p class="card-text"><?php echo $artical['info']; ?></p>
              <a href="artical.php?do=<?php echo  $artical['id'] ?>" class="btn btn-primary">التفاصيل</a>
            </div>   
       </div>


          <?php


          }

          ?>
      
          </div>  
    </div>


    <div class="clearfix"></div>

    <?php
    include "footer.php";
?>
