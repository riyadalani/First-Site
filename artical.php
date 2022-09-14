
<?php
include "admin/connect.php";
include "header.php";
?>


<?php 

$id= $_GET['do'];

$stmt = $con->prepare("SELECT * FROM articals WHERE id=?");
            $stmt->execute(array($id));
            $articals = $stmt->fetchAll();

            foreach($articals as $artical) {
                ?>

<style>
    
    .row{
        margin-top: 50px;
        margin-bottom: 50px;
    }
    
</style>

<div class="row">
    
    
    
    <div class="container">
    <h2><?php echo $artical['title'];?></h2>
    <img class="" src="admin/uploads/imgs/<?php echo $artical['img'];?>">
    <h6 ><span>   التاريخ : <?php echo $artical['date'];?></span> |<span>   الكاتب : <?php echo $artical['author'];?></span></h6>

    <hr>
    
    <p><?php echo $artical['text'];?></p>
    
    </div>
    
    
    

</div>
                


<?php } ?>


<?php
include "footer.php";
?>
