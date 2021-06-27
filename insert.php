<?php
include 'db.php';
if(isset($_POST['yangi'])){
/*print_r($_POST);*/    
    
    $turkum = $_POST['turkum'];
    
    $model = $_POST['model'];
    
    $nom = $_POST['nom'];
    
    $narx = $_POST['narx'];
    
    $info = $_POST['info'];
    
    $rasm = $_POST['rasm'];
    
    $sql = "INSERT INTO `user` (`id`, `turkum`, `model`, `nom`, `narx`, `eskinarx`, `info`, `rasm`) VALUES (NULL, '$turkum', '$model', '$nom', '$narx', '$eskinarx', '$info', '$rasm')";
    $res = mysqli_query($db,$sql);
    if($res){
      header("location: indexs.php");
    }
    else{
        echo "xatolik sodir boldi";
    }
}
else{
    header("location: indexs.php");
}

?>