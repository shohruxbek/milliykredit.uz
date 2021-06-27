<?php
include 'db.php';

$komp = "SELECT * FROM `user` WHERE `turkum` LIKE 'konditsioner'";//"SELECT * FROM user";
$res = mysqli_query($db,$komp);
$users= array();
while($row = mysqli_fetch_assoc($res)){
    $users[] = $row;
}?>
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
           <header  class="shop_header_area">
            <div class="containert">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a style="margin-left: 10px" class="navbar-brandj" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Bosh menyu</a></li>
                            
                          <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Modellar<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#sam">Samsung</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#art">Artel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#hit">Hitachi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#lg">LG</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#ava">Avalon</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mahsulotlar<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="telefonlar_6_oyga_kredit.php">&nbsp;&nbsp;6 oyga Telefonlar</a></li>
                                     <li class="nav-item"><a class="nav-link" href="telefonlar_12_oyga_kredit.php">&nbsp;&nbsp;12 oyga Telefonlar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kompyuter.php">&nbsp;&nbsp;Kompyuterlar va jihozlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="televizor.php">&nbsp;&nbsp;Televizorlar va jihozlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="uy_buyumlari.php">&nbsp;&nbsp;Uy buyumlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="oshxona_buyumlari.php">&nbsp;&nbsp;Oshxona buyumlari</a></li>
                                   <li class="nav-item"><a class="nav-link" href="muzlatgich_va_kir_yuvish.php">&nbsp;&nbsp;Muzlatgichlar va Kir yuv.mash</a></li><!--
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Mebellar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Akfa-Imzo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dvij.html">&nbsp;&nbsp;Generatorlar</a></li>-->
                                  
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="ksh.html">Kredit shartlari</a></li>
                            <li class="nav-item"><a class="nav-link" href="aksiya.html">Aksiya va bonus</a></li>
                            <li class="nav-item"><a class="nav-link" href="help.html">Bog'lanish</a></li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
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
                    <h3>Konditsionerlar</h3>
                    <ul>
                        <li><a href="index.php">Bosh menyu</a></li>
                        <li><a href="maishiy_texnika.html">maishiy texnika</a></li>
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
                    
    <div class="row">
                       <?php foreach($users AS $user) :?>
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
                            <div class="l_product_item  client">
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
                    
                    
                    </div></div></section>
        <!--================End Categories Product Area =================-->
        
        <?php
        include 'engpast.php';
        ?>