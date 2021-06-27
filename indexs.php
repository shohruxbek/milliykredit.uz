<?php
include 'db.php';

//$sql = "SELECT * FROM user";
$sql = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'nobby'";
$res = mysqli_query($db,$sql);
/*echo mysqli_num_rows($res);*/

$users= array();

while($row = mysqli_fetch_assoc($res)){
    
    $users[] = $row;
}
//$sql = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'samsung'";
?> 


<br><br>
<h2 align:"center">yangi mahsulot qo'shish</h2><br>


<form style="margin:0px 3% 20px 3%" action="insert.php" method="post">
 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">turkum</span>
  <input type="text" name="turkum" class="form-control" placeholder="turkum" aria-describedby="sizing-addon1">
</div>

 <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">model</span>
  <input type="text" name="model" class="form-control" placeholder="model" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;&nbsp;nom</span>
  <input type="text" name="nom" class="form-control" placeholder="nom" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;narx</span>
  <input type="text" name="narx" class="form-control" placeholder="narx" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;info</span>
  <input type="text" name="info" class="form-control" placeholder="info" aria-describedby="sizing-addon1">
</div>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">&nbsp;rasm</span>
  <input type="text" name="rasm" class="form-control" placeholder="rasm" aria-describedby="sizing-addon1">
</div>
    <button class="btn btn-primary btn-lg" type="submit" name="yangi">Qo'shish</button>
    </form>
  <table  class="table table-bordered">
  <div>  <tr>
        <th>ID</th>
        <th>TURKUM</th>
        <th>MODEL</th>
        <th>NOM</th>
        <th>NARX</th>
        <th>ESKINARX</th>
        <th>INFO</th>
        <th>RASM</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </div>
    <?php foreach($users AS $user) :?>
   <div><tr>
        <td ><?=$user['id']?></td>
        <td ><?=$user['turkum']?></td>
        <td><?=$user['model']?></td>
        <td><?=$user['nom']?></td>
        <td><?=$user['narx']?></td>
        <td><?=$user['eskinarx']?></td>
        <td><?=$user['info']?></td>
        <td><?=$user['rasm']?></td>
        <td><a href="edit.php?id=<?=$user['id']?>">edit</a></td>
        <td><a href="delete.php?id=<?=$user['id']?>">delete</a></td>
        
    </tr></div> 
    <?php endforeach?>




    
    
</table>




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
    
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
       <!-- <section class="categories_banner_area">
            <div class="container">
                <div class="c_banner_inner">
                    <h3>Telefonlar</h3>
                    <ul>
                        <li><a href="index.html">Bosh menyu</a></li>
                        <li><a href="tellar.html">telefonlar</a></li>
                        <li class="current"><a style="color: red;" href="#">Bonus olish</a></li>
                    </ul>
                </div>
            </div>
        </section>-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Telefonlar 6 oyga *bank-siz kredit</h3>
                    <ul>
                        <li><a href="index.html">Bosh menyu</a></li>
                        <li><a href="tel12.html">telefonlar 6 oyga *banksiz kredit</a></li>
                        <li class="current"><a style="color: red;" href="help.html">Bonus olish</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
 
        
        <!--================Categories Product Area =================-->
        <section class="no_sidebar_2column_area">
            <div class="container">
                <div class="two_column_product">
                    
                    <h1 id="red">Redmi</h1><hr />
                    <div class="row">
                       <?php foreach($users AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                         if($user['narx'] > "0"){}else{$user['narx']="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img class="img-fluid" src='<?=$user['rasm']?>' alt="">
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Sotib olish</a></li>
                                        
                                    </ul>
                                    <h4><?=$user['model']?>  <?=$user['nom']?></h4>
                                    <h5><?=$user['narx']?><sup>000</sup><span><span> so'm<p>oyiga</p></span></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
          
                </div>
            </div>
        </section>
        
        
        
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