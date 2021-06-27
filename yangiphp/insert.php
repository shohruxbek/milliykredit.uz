<?php
include 'db.php';
if(isset($_POST['yangi'])){
/*print_r($_POST);*/    
    
    $model = $_POST['model'];
    
    $nom = $_POST['nom'];
    
    $narx = $_POST['narx'];
    
    $info = $_POST['info'];
    
    $rasm = $_POST['rasm'];
    
    $sql = "INSERT INTO `user` (`id`, `model`, `nom`, `narx`, `info`, `rasm`) VALUES (NULL, '$model', '$nom', '$narx', '$info', '$rasm')";
    $res = mysqli_query($db,$sql);
    if($res){
      header("location: index.php");
    }
    else{
        echo "xatolik sodir boldi";
    }
}
else{
    header("location: index.php");
}

?>