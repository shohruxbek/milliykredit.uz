
<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

//header("Location: ../index.php");
$sql = "SELECT * FROM user WHERE id=$id"; 
$res= mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($res);

/*print_r($row);*/

$nameErr = $checErr = $telErr = "";
$name  = $chec = $msg = $tel = "";
$results="";

   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



if(isset($_POST['submit'])){

    
  if (empty($_POST["name"]) and preg_match("/^[a-zA-Z]*$/",$_POST["name"])) {
    $nameErr = "* Ismda xatolik";
  } else {
    $name = test_input($_POST["name"]);
  }  
    if (empty($_POST["tel"])) {
    $telErr = "* Telefon kiritilmadi";
  } else {
    $tel = test_input($_POST["tel"]);
  } 
     if (empty($_POST["msg"])) {
    $msg = "";
  } else {
    $msg = test_input($_POST["msg"]);
  } 
 if (empty($_POST["chec"])) {
    $checErr = "* Rasmdagi kodni kiritish kerak";
  }
    elseif($_POST["chec"]!=$_POST["rasmraq"]) {
    $checErr = "* Rasm kodi xato";
  }
else {
    $chec = test_input($_POST["chec"]);
  }
   array_map('unlink', glob("captcha/".$_POST["rasmnom"].".jpg"));
   


    if($nameErr!= "* Ismda xatolik" and $telErr!= "* Telefon kiritilmadi" and $_POST["chec"]==$_POST["rasmraq"]){
require 'mail_feedback/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Âêëþ÷èòü ïîäðîáíûé âûâîä îòëàäêè

$mail->isSMTP();                                      // Óêàçûâàåì ÷òî èñïîëüçóåì SMTP
$mail->Host = 'server1.ahost.uz';  // Óêàæèòå SMTP Ñåðâåð
$mail->SMTPAuth = true;                               // Âêëþ÷åíèå ïðîâåðêè ïîäëèííîñòè SMTP
$mail->Username = 'admin@milliykredit.uz';                 // Ëîãèí ïî÷òîâîãî ÿùèêà
$mail->Password = '$P~OI^g*mR*g';                           // Ïàðîëü 
$mail->SMTPSecure = 'ssl';                            // Óêàçûâàåì êàêîå ïîäêëþ÷åíèå èñïîëüçóåì TLS èëè SSL â íàøåì ñëó÷àå SSL
$mail->Port = 465;                                    // Ïîðò äëÿ SSL - 465, TLS 587.

$soat = date('H:i', strtotime('0 hour'));
$kun = date ('d.m.Y', strtotime('0 hour'));   
    
$mail_body = '
    <b>Vaqt: '.$kun.' '.$soat.'<br />
    <b>Name: '.$_POST['name'].'<br />
    <b>Nomer: '.$_POST['tel'].'<br />
    <b>Xabar: '.$_POST['msg'].'<br />
    <b>Id: '.$_POST['id'].'<br />
    <b>Model: '.$_POST['model'].'<br />
    <b>Nom: '.$_POST['nom'].'<br />
    <b>Narx: '.$_POST['narx'].'<br />
    <b>Rasm: '.$_POST['rasm'].'<br />
';
$mail->addAddress('milliykredituz@gmail.com');
 $mail->Subject='milliykredit.uz: '.$_POST['model'];
$mail->IsHTML(true);
$mail->Body = $mail_body;

 if(!$mail->send()){
      $results='<div class="notify top-left do-show" data-notification-status="error"><p>Buyurtmangiz yuborilmadi! ❌ <br>  ⚠️ Iltimos ma\'lumotlaringizni qaytadan kiritib ko\'ring</p></div>';
    }
    else{
        $results='<div class="notify top-left do-show" data-notification-status="success"><p>Buyurtmangiz yuborildi ✅ <br>   Sizga tez orada aloqaga chiqamiz</p></div>';
    }
        
    }
    else{
        $results='<div class="notify top-left do-show" data-notification-status="error"><p>Buyurtmangiz yuborilmadi! ❌ <br>  ⚠️ Iltimos ma\'lumotlaringizni qaytadan kiritib ko\'ring</p></div>'; 
    }
        
}?>



<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="description" CONTENT="Milliy kredit bank-siz rassrochka. maishiy texnika buyumlari muddatli to'lovga beriladi">
    <meta name="google-site-verification=WLCAFVF6aokCaFI2m4bxQGeG6Tj7Zchf3C9l6y-sg4M"/>
    <meta name="yandex-verification" content="46589058054b99e2" />
    <meta name="robots" content="index,follow">
    <link rel="icon" href="img/logosayt.ico" type="image/x-icon" />
    <title>Milliy kredit-mahsulot infosi</title>

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
    <link href="css/yondanch.css" rel="stylesheet">
    
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <style>
        .error {color: #FF0000;}
        .mySlides {
            display: none;
        }

    </style>
</head>

<body>
    <header class="shop_header_area">
        <div class="containert">
           
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a style="margin-left: 10px" class="navbar-brandj" href="index.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown submenu active">
                        </li>
                        <li class="nav-item"><a class="nav-link" href="maishiy_texnika.html">&nbsp;&nbsp;&nbsp;&nbsp;Maishiy texnikalar</a></li>
                        <li class="nav-item"><a class="nav-link" href="ksh.html">&nbsp;&nbsp;&nbsp;&nbsp;Kredit shartlari</a></li>
                        <li class="nav-item"><a class="nav-link" href="aksiya.html">&nbsp;&nbsp;&nbsp;&nbsp;Aksiya va bonus</a></li>
                        <li class="nav-item"><a class="nav-link" href="help.html">&nbsp;&nbsp;&nbsp;&nbsp;Bog'lanish</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
        <!--================Slider Area =================-->

  


 <?=$results; ?>
                 
       
        <!--================Product Details Area =================-->
        <section class="product_details_area">
            <div class="container">
                <div class="row">
                   <?php
                        if($row['rasm']){}else{$row['rasm']="img/no-image.png";}
                        if(strpos($row['rasm'],".jpg") or strpos($row['rasm'],".JPG") or strpos($row['rasm'],".jpeg") or strpos($row['rasm'],".png")){}else{$row['rasm']="img/no-image.png";}
                                       if($row['narx'] > "0"){
                             $row['narx']*=1.16763;
                            
                             $narx=ceil($row['narx']); $eskinarx=ceil($narx*1.05);
                              if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
                                  
   }else{
       $narx=ceil($narx);
   }
                         }else{$narx="***";}
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
                            <h6> <span> </span></h6>
                            <h4> <del style="color:red"><?=$eskinarx ?><sup>000</sup></del>  / <?=$narx ?> <sup>000</sup> so'm oyiga</h4>
                            
                            
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
        
    
       <?php
$img = imagecreatefromjpeg('captcha/rasm.jpg');
$font = "captcha/font/7.ttf"; 
$white = imagecolorallocate($img, 75, 75, 75);
$txt = rand(1000,9999);
$x = 5;
$y = 40;
imagettftext($img, 30, 0, $x,$y, $white, $font, $txt);
$d=time();
imagejpeg($img,"captcha/$d.jpg");
?>
        
        <section class="contact_area" style="padding-top:15px">
            <div class="container">
                <div class="contact_form_inner">
                    <h3> ushbu mahsulotga buyurtma jo'natish</h3>
                    <form class="contact_us_form row"  method="post" id="contactForm" action="" novalidate="novalidate">
                       
                        <div class="form-group col-lg-4">
                           <span class="error">*Ismingizni to'g'ri kiriting! <?php echo $nameErr;?></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="* Ismingiz... " required>
                        </div>
                        <div class="form-group col-lg-4">
                           <span class="error">Telefon raqamingizni to'g'ri kiriting! <?php echo $telErr;?></span>
                            <input type="text" class="form-control" id="tel" name="tel" placeholder="* Telefon raqamingiz..." required>
                        </div>
                        <div class="form-group col-lg-4">
                           <span class="error">*Rasmdagi kodni to'g'ri kiriting!  <?php echo $checErr;?></span>
                            <div>
                                <img src="captcha/<?=$d?>.jpg">
                                <input type="text" class="form-control" id="chec" name="chec" placeholder="* Rasmdagi kod..." required>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="msg" id="msg" rows="1" placeholder="Biror gap yozing..." required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                           <input name="id" type="hidden" value="<?=$row['id']?>"> 
                           <input name="model" type="hidden" value="<?=$row['model']?>">
                           <input name="nom" type="hidden" value="<?=$row['nom']?>">
                           <input name="narx" type="hidden" value="<?=$narx?>">
                           <input name="rasm" type="hidden" value="<?=$row['rasm']?>">
                           <input name="rasmnom" type="hidden" value="<?=$d?>">
                           <input name="rasmraq" type="hidden" value="<?=$txt?>">
                            <button type="submit" value="submit" name="submit" class="btn update_btn form-control">Jo'natish</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

     

        
     
        
        
        
        
        <!--================End Related Product Area =================-->
        
              <section class="for">
				<h1>Biz bilan bog'laning</h1>			
	</section>
                <section class="contact_area" >
            <div class="container">
                <div class="contact_title">
            
                    <p style="color:#051b57">Har bir; Internet orqali murojaat qilgan kishiga biz 2% lik chegirma bilan mahsulotni arzonlashtirib beramiz</p>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                               <p>#Toshkent - Malika bozor J-5   <a style="color: darkgreen" href="tel:+998993300099"> 99 330 00 99</a></p>
                                <p>#Samarqand - Povorot GOR.GAZ  <a style="color: darkgreen" href="tel:+998933360099"> 93 336 00 99</a></p>
                                <p>#Samarqand - Povorot UMS      <a style="color: darkgreen" href="tel:+998974060099"> 97 406 00 99</a></p>
                                <p>#Samarqand - Povorot TADA     <a style="color: darkgreen" href="tel:+998993500099"> 99 350 00 99</a></p>
                                <p>#Samarqand - Samsung Centr    <a style="color: darkgreen" href="tel:+998944000099"> 94 440 00 99</a></p>
                                <p>#Samarqand - Dagbitskiy       <a style="color: darkgreen" href="tel:+998933360099"> 93 336 00 99</a></p>
                                <p>#Samarqand - Kritiy rinok     <a style="color: darkgreen" href="tel:+998932330099"> 93 233 00 99</a></p>
                                <p>#Samarqand - Ovoshnoy         <a style="color: darkgreen" href="tel:+998993390099"> 99 339 00 99</a></p>
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
                                <a href="info@milliykredit.uz">info@milliykredit.uz</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
  
                
                
              
            </div>
        </section>
       <div id="footer">
    <div class="col-lg-6 col-lg-12">
        <aside class="f_widget f_about_widget ">
            <div class="justify-content-center">
                <h5 style="margin-bottom: 10px;color: #9395a5">Ijtimoiy tarmoqlar</h5>
                <a href="https://www.telegram.me/milliykredit" target="_blank"><img src="img/social/tg.png"></a>
                <a href="https://www.instagram.com/milliykredit" target="_blank"><img src="img/social/in.png"></a>
                <a href="https://www.facebook.com/milliykredituz"><img src="img/social/fb.png" target="_blank"></a>
                <a href="https://ok.ru/profile/590115855162" target="_blank"><img src="img/social/ok.png"></a>
                <a href="https://twitter.com/KreditMilliy" target="_blank"><img src="img/social/tv.png"></a>
                <a href="#"><img src="img/social/wh.png" target="_blank"></a>
                <a href="https://call.imo.im/milliykredit" target="_blank"><img src="img/social/im.png"></a>
                
            </div>
        </aside>
    </div>  
    </div>
      
        
     <div id="mainMenu" class="mainMenuOverlay floating2"><!--https://codepen.io/mahmoud-nb/pen/pbNBYP/-->
  <div  class="navire floating3" ></div>
         <div class="itemMenuBox bills"><a href="https://www.telegram.me/milliykredit" target="_blank" class="itemMenu "><i class="fa" aria-hidden="true"></i></a></div>
           <div class="itemMenuBox tarsheed"><a href="https://www.instagram.com/milliykredit" class="itemMenu "><i class="fa" aria-hidden="true"></i></a></div>
           <div class="itemMenuBox employees"><a href="#" class="itemMenu "><i class="fa" aria-hidden="true"></i></a></div>
           <div class="itemMenuBox location"><a href="https://ok.ru/profile/590115855162" class="itemMenu "><i class="fa" aria-hidden="true"></i></a></div>
           <div class="itemMenuBox eservices"><a href="https://call.imo.im/milliykredit" class="itemMenu "><i class="fa" aria-hidden="true"></i></a></div>
           <div class="itemMenuBox contact"><a href="https://twitter.com/KreditMilliy" class="itemMenu "><i class="fa " aria-hidden="true"></i></a></div>
	<a href="javascript:void(0)" class="toggleMenu floating" ><i class="fa fa-bars" aria-hidden="true"></i></a>
</div>
        <!--================End Footer Area =================-->
        
        
        
          <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Extra plugin css -->
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>

  
    <script src="js/a/plugins.js"></script>
    <script src="js/a/active.js"></script>
    
       
       
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/yondanch.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>