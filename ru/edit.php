<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM user WHERE id=$id"; 
$res= mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($res);

/*print_r($row);*/
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="img/logosayt.ico" type="image/x-icon" />
       <title>Milliy kredit</title>

        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
       <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="css/a.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

<style>
.mySlides {display:none;}
    

</style>
    </head>
    <body>
    
<form style="margin:0px 3% 20px 3%" action="internetdan.php" method="post">
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">turkum</span>
  <input type="text" name="turkum"  value="<?=$row['turkum']?>" class="form-control" placeholder="turkum" aria-describedby="sizing-addon1">
</div>

 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">model</span>
  <input type="text" name="model"  value="<?=$row['model']?>" class="form-control" placeholder="model" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;&nbsp;nom</span>
  <input type="text" name="nom"  value="<?=$row['nom']?>" class="form-control" placeholder="nom" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;narx</span>
  <input type="text" name="narx" value="<?=$row['narx']?>" class="form-control" placeholder="narx" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;info</span>
  <input type="text" name="info"  value="<?=$row['info']?>" class="form-control" placeholder="info" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;rasm</span>
  <input type="text" name="rasm"  value="<?=$row['rasm']?>" class="form-control" placeholder="rasm" aria-describedby="sizing-addon1">
</div>
   
    <input name="id" type="hidden" value="<?=$row['id']?>">
   
    <button class="btn btn-primary btn-lg" type="submit" name="edit">tahrirlash</button>
    </form>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
         <script src="js/a/plugins.js"></script>
    <script src="js/a/active.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>