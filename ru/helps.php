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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
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
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!-- Последняя компиляция и сжатый CSS -->  
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
                            <li class="nav-item dropdown submenu active">
                                <!--<a class="nav-link dropdown-toggle" href="index.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>-->
                            </li><li class="nav-item"><a class="nav-link" href="index.php">&nbsp;&nbsp;Bosh menyu</a></li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                &nbsp;&nbsp;Mahsulotlar<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="telefonlar_6_oyga_kredit.php">&nbsp;&nbsp;6 oyga Telefonlar</a></li>
                                     <li class="nav-item"><a class="nav-link" href="telefonlar_12_oyga_kredit.php">&nbsp;&nbsp;12 oyga Telefonlar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="kompyuter.php">&nbsp;&nbsp;Kompyuterlar va jihozlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="televizor.php">&nbsp;&nbsp;Televizorlar va jihozlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="uy_buyumlari.php">&nbsp;&nbsp;Uy buyumlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="oshxona_buyumlari.php">&nbsp;&nbsp;Oshxona buyumlari</a></li>
                                    <li class="nav-item"><a class="nav-link" href="konditsioner.php">&nbsp;&nbsp;Konditsionerlar</a></li>
                                     <li class="nav-item"><a class="nav-link" href="muzlatgich_va_kir_yuvish.php">&nbsp;&nbsp;Muzlatgichlar va Kir yuv.mash</a></li><!--
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Mebellar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Akfa-Imzo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dvij.html">&nbsp;&nbsp;Generatorlar</a></li>-->
                                 
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
        <!--================Slider Area =================-->


       
 
       
        <!--================Product Details Area =================-->
        <section class="product_details_area">
            <div class="container">
                <div class="row">
                   <?php
                        if($row['rasm']){}else{$row['rasm']="img/no-image.png";}
                        if(strpos($row['rasm'],".jpg") or strpos($row['rasm'],".JPG") or strpos($row['rasm'],".jpeg") or strpos($row['rasm'],".png")){}else{$row['rasm']="img/no-image.png";}
                         if($row['narx'] > "0"){}else{$row['narx']="***";}
                        ?>
                    <div class="col-lg-5">
                        <div class="product_details_slider">
                            <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                                <ul>	<!-- SLIDE  -->
                                    <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb='<?=$row['rasm']?>'  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src='<?=$row['rasm']?>'  alt=""  width="1920" height="1080" data-lazyload='<?=$row['rasm']?>' data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                   <li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb='<?=$row['rasm']?>'  data-rotate="0"  data-saveperformance="off"  data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src='<?=$row['rasm']?>'  alt=""  width="1920" height="1080" data-lazyload='<?=$row['rasm']?>' data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-301" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb='<?=$row['rasm']?>'  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src='<?=$row['rasm']?>'  alt=""  width="1920" height="1080" data-lazyload='<?=$row['rasm']?>' data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-302" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb='<?=$row['rasm']?>'  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src='<?=$row['rasm']?>'  alt=""  width="1920" height="1080" data-lazyload='<?=$row['rasm']?>' data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product_details_text">
                            <h2><?=$row['model']?> <?=$row['nom']?> </h2>
                            <ul class="p_rating">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <h6>yaxshi tovar <span> </span></h6>
                            <h4> <del style="color:red"><?=$row['eskinarx']?><sup>000</sup></del>  / <?=$row['narx']?> <sup>000</sup> so'm oyiga</h4>
                            
                            
                            <blockquote>
  <p><?=$row['info']?></p>
</blockquote>
                            
                            <!--<div class="quantity">
                                <a class="add_cart_btn" href="#">sotib olish</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Details Area =================-->
        <!--================End Product Details Area =================-->
        
        <!--================End Related Product Area =================-->
        
       
                <section class="contact_area">
            <div class="container">
                <div class="contact_title">
                    <h1>Bizning manzil</h1>
                    <p>Har bir; Internet orqali murojaat qilgan kishiga biz 2% lik chegirma bilan mahsulotni arzonlashtirib beramiz</p>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>#Samarqand</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+998987720099"> 98 772 00 99</a>
                                <a href="tel:+998997720099"> 99 772 00 99</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:milliykredituz@gmail.com">milliykredituz@gmail.com</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
                
                
              
            </div>
        </section>
              <script src="js/jquery-3.2.1.min.js"></script>
              <script src="js/popper.min.js"></script>
      <script src="js/theme.js"></script>   <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    </body></html>