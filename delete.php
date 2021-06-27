<?php
include 'db.php';

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
     $sql = "DELETE FROM user WHERE id=$id";
   $res =  mysqli_query($db,$sql);
    if($res){
         header("Location: indexs.php"); 
    }
    else{
        echo "bunday id mavjud emas";
    }
}
else{
    header("Location: indexs.php");
}



?>