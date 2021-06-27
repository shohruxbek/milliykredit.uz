<?php
include 'db.php';

$redmi = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'redmi'";//"SELECT * FROM user";
$res = mysqli_query($db,$redmi);
$users= array();
while($row = mysqli_fetch_assoc($res)){
    $users[] = $row;
}
//$sql = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'samsung'"; 
$samsung = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'samsung'";//"SELECT * FROM user";
$res1 = mysqli_query($db,$samsung);
$users1= array();
while($row1 = mysqli_fetch_assoc($res1)){
    $users1[] = $row1;
}

$maxvi = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'maxvi'";//"SELECT * FROM user";
$res2 = mysqli_query($db,$maxvi);
$users2= array();
while($row2 = mysqli_fetch_assoc($res2)){
    $users2[] = $row2;
}

$artel = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'artel'";//"SELECT * FROM user";
$res3 = mysqli_query($db,$artel);
$users3= array();
while($row3 = mysqli_fetch_assoc($res3)){
    $users3[] = $row3;
}

$nokia = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'nokia'";//"SELECT * FROM user";
$res4 = mysqli_query($db,$nokia);
$users4= array();
while($row4 = mysqli_fetch_assoc($res4)){
    $users4[] = $row4;
}
$bq = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'bq'";//"SELECT * FROM user";
$res5 = mysqli_query($db,$bq);
$users5= array();
while($row5 = mysqli_fetch_assoc($res5)){
    $users5[] = $row5;
}
$inoi = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'inoi'";//"SELECT * FROM user";
$res6 = mysqli_query($db,$inoi);
$users6= array();
while($row6 = mysqli_fetch_assoc($res6)){
    $users6[] = $row6;
}
$nobby = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel6' AND `model` LIKE 'nobby'";//"SELECT * FROM user";
$res7 = mysqli_query($db,$nobby);
$users7= array();
while($row7 = mysqli_fetch_assoc($res7)){
    $users7[] = $row7;
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" href="img/logosayt.ico" type="image/x-icon" />
       <title>Milliy kredit - 6 oyga bank-siz kredit</title>

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
        <link href="css/tel6.css" rel="stylesheet">
      

<style>
.mySlides {display:none;}
</style>
    <!-- CCS for the effects-->
    

    </head>
    <body>
           <header  class="shop_header_area">
            <div class="containert">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a style="margin-left: 10px" class="navbar-brandj" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">&nbsp;&nbsp;Bosh menyu</a></li>
                          <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                &nbsp;&nbsp;Modellar<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#sam">&nbsp;&nbsp;Samsung</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#red">&nbsp;&nbsp;Redmi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#max">&nbsp;&nbsp;Maxvi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#art">&nbsp;&nbsp;Artel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#nok">&nbsp;&nbsp;Nokia</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                &nbsp;&nbsp;Mahsulotlar<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                     <li class="nav-item"><a class="nav-link" href="telefonlar_12_oyga_kredit.php">&nbsp;&nbsp;Telefonlar 12 oyga kredit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="konditsioner.php">&nbsp;&nbsp;Konditsionerlar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kompyuter.php">&nbsp;&nbsp;Kompyuterlar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="televizor.php">&nbsp;&nbsp;Televizorlar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="muzlatgich_va_kir_yuvish.php">&nbsp;&nbsp;Kir yuvish mashinalari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="oshxona_buyumlari.php">&nbsp;&nbsp;Oshxona buyumlari</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="ksh.html">&nbsp;&nbsp;Kredit shartlari</a></li>
                            <li class="nav-item"><a class="nav-link" href="aksiya.html">&nbsp;&nbsp;Aksiya va bonus</a></li>
                            <li class="nav-item"><a class="nav-link" href="help.html">&nbsp;&nbsp;Bog'lanish</a></li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    
        <!--================End Menu Area =================-->
        
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Telefonlar 6 oyga *bank-siz kredit</h3>
                    <ul>
                        <li><a href="index.php">Bosh menyu</a></li>
                        <li><a href="telefonlar_12_oyga_kredit.php">telefonlar 6 oyga *banksiz kredit</a></li>
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
                                 if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                            
                             $narx=ceil($user['narx']); $eskinarx=ceil($narx*1.05);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=ceil($narx);
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">     
                                   	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm oyiga</span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
                    
    <h1 id="sam">Samsung</h1><hr />
                           <div class="row">
                       <?php foreach($users1 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                        if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                             	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
 
                        </div>
                        <?php endforeach?>
                       
                    </div>
                          
    <h1 id="max">MAXVI</h1><hr />
                             <div class="row">
                       <?php foreach($users2 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                       if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                   	          	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
                            
    <h1 id="art">ARTEL</h1><hr />
                               <div class="row">
                       <?php foreach($users3 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                      if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                   	          	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
                              
    <h1 id="nok">NOKIA</h1><hr />
                     <div class="row">
                       <?php foreach($users4 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                   if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                   	          	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
                    
                        <h1 id="nok">BQ</h1><hr />
                     <div class="row">
                       <?php foreach($users5 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                      if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                   	          	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>
                  
                    
        <h1 id="nok">INOI</h1><hr />
                     <div class="row">
                       <?php foreach($users6 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                 if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    $eskinarx=ceil($narx*1.05);
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                   	          	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>                  
                        
                          
         <h1 id="nok">NOBBY</h1><hr />
                     <div class="row">
                       <?php foreach($users7 AS $user) :?>
                       <?php
                        if($user['rasm']){}else{$user['rasm']="img/no-image.png";}
                        if(strpos($user['rasm'],".jpg") or strpos($user['rasm'],".JPG") or strpos($user['rasm'],".jpeg") or strpos($user['rasm'],".png")){}else{$user['rasm']="img/no-image.png";}
                                if($user['narx'] > "0"){
                             $user['narx']*=1.16763;
                             $narx=ceil($user['narx']);
                                    $eskinarx=ceil($narx*1.05);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
    
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=$narx;
   }
                         }else{$narx="***";}
                        ?>
                        <div class="col-lg-2 col-sm-4">
                            <div class="l_product_item client">
                                <div class="l_p_img">
                                             	<div class=" hovereffect"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""><div class="overlay">
                <h2><?=$user['model']?> <?=$user['nom']?><br>
                <?=$user['info']?></h2>
				
            </div></div>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Buyurtma berish</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> so'm<p>oyiga</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>                         
                 
                </div>
            </div>
        </section>
        <!--================End Categories Product Area =================-->
      <?php
        include 'engpast.php';
        ?>