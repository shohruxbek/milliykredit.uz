<?php
include 'db.php';

$huawei = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel12' AND `model` LIKE 'huawei'";//"SELECT * FROM user";
$res = mysqli_query($db,$huawei);
$users= array();
while($row = mysqli_fetch_assoc($res)){
    $users[] = $row;
}
//$sql = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel12' AND `model` LIKE 'samsung'"; 
$artel = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel12' AND `model` LIKE 'artel'";//"SELECT * FROM user";
$res1 = mysqli_query($db,$artel);
$users1= array();
while($row1 = mysqli_fetch_assoc($res1)){
    $users1[] = $row1;
}

$lg = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel12' AND `model` LIKE 'lg'";//"SELECT * FROM user";
$res2 = mysqli_query($db,$lg);
$users2= array();
while($row2 = mysqli_fetch_assoc($res2)){
    $users2[] = $row2;
}

$meizu = "SELECT * FROM `user` WHERE `turkum` LIKE 'tel12' AND `model` LIKE 'meizu'";//"SELECT * FROM user";
$res3 = mysqli_query($db,$meizu);
$users3= array();
while($row3 = mysqli_fetch_assoc($res3)){
    $users3[] = $row3;
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
	<title>Milliy kredit - 12 месяцев кредит без банк </title>

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
						<li class="nav-item"><a class="nav-link" href="index.php">&nbsp;&nbsp;Главное меню</a></li>

						<li class="nav-item dropdown submenu">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								&nbsp;&nbsp;Модели<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="#art">&nbsp;&nbsp;Artel</a></li>
								<li class="nav-item"><a class="nav-link" href="#hua">&nbsp;&nbsp;Huawei</a></li>
								<li class="nav-item"><a class="nav-link" href="#lg">&nbsp;&nbsp;LG</a></li>
								<li class="nav-item"><a class="nav-link" href="#mei">&nbsp;&nbsp;Meizu</a></li>

							</ul>
						</li>
						<li class="nav-item dropdown submenu">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								&nbsp;&nbsp;Продукты<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								   <li class="nav-item"><a class="nav-link" href="telefonlar_6_oyga_kredit.php">&nbsp;&nbsp;Телефоны на 6 месяцев</a></li>
                                   <li class="nav-item"><a class="nav-link" href="kompyuter.php">&nbsp;&nbsp;Компьютеры</a></li>
                                    <li class="nav-item"><a class="nav-link" href="televizor.php">&nbsp;&nbsp;Телевизоры</a></li>
                                    <li class="nav-item"><a class="nav-link" href="uy_buyumlari.php">&nbsp;&nbsp;Техника для дома</a></li>
                                    <li class="nav-item"><a class="nav-link" href="oshxona_buyumlari.php">&nbsp;&nbsp;Техника для кухня</a></li>
                                    <li class="nav-item"><a class="nav-link" href="konditsioner.php">&nbsp;&nbsp;Кондиционеры</a></li>
                                     <li class="nav-item"><a class="nav-link" href="muzlatgich_va_kir_yuvish.php">&nbsp;&nbsp;Холодильники и стиралька</a></li><!--
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Mebellar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">&nbsp;&nbsp;Akfa-Imzo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dvij.html">&nbsp;&nbsp;Generatorlar</a></li>-->
                                 
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="ksh.html">&nbsp;&nbsp;Условия кредитования</a></li>
                           <li class="nav-item"><a class="nav-link" href="aksiya.html">&nbsp;&nbsp;Акция и бонус</a></li>
						<li class="nav-item"><a class="nav-link" href="help.html">&nbsp;&nbsp;Связаться с нами</a></li>

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
				<h3>Телефоны на 12 месяцев *кредит без банк</h3>
				<ul>
					<li><a href="index.php">Главное меню</a></li>
                        <li><a href="telefonlar_12_oyga_kredit.php">Телефоны на 6 месяцев *кредит без банк</a></li>
                        <li class="current"><a style="color: red;" href="help.html">Получить бонус</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!--================End Categories Banner Area =================-->


	<!--================Categories Product Area =================-->
	<section class="no_sidebar_2column_area">
		<div class="container">
			<div class="two_column_product">


				<h1 id="hua">Huawei</h1>
				<hr />
				
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
                                   	<a href="help.php?id=<?=$user['id']?>"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""></a>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Узнать больше...</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> сум <p>в месяц</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>

				<h1 id="art">Artel</h1>
				<hr />
				
    <div class="row">
                       <?php foreach($users1 AS $user) :?>
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
                                   	<a href="help.php?id=<?=$user['id']?>"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""></a>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Узнать больше...</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> сум <p>в месяц</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>

				<h1 id="lg">LG</h1>
				<hr />
				
    <div class="row">
                       <?php foreach($users2 AS $user) :?>
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
                                   	<a href="help.php?id=<?=$user['id']?>"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""></a>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Узнать больше...</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> сум <p>в месяц</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>

				<h1 id="mei">Meizu</h1>
				<hr />
				
    <div class="row">
                       <?php foreach($users3 AS $user) :?>
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
                                   	<a href="help.php?id=<?=$user['id']?>"><img class="img-fluid" src='<?=$user['rasm']?>' alt=""></a>
                                    <!--<h5 class="sale">yangi</h5>-->
                                </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li><a class="add_cart_btn" href="help.php?id=<?=$user['id']?>">Узнать больше...</a></li>
                                        
                                    </ul>
                                    <h4><p class="text-capitalize"><?=$user['model']?> <?=$user['nom']?></p></h4>
                                    <h5><?=$narx?><sup>000</sup><span> сум <p>в месяц</p></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                       
                    </div>








				<!-- <nav aria-label="Page navigation example" class="pagination_area">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </nav>-->
			</div>
		</div>
	</section>
	<!--================End Categories Product Area =================-->

	  <?php
        include 'engpast.php';
        ?>