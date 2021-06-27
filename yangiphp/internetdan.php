<?php
include 'db.inc.php';
// Check connection
if (!$db) {
    die("Bog'lanishda xatolik: " . mysqli_connect_error());
}
if(isset($_POST['edit'])){

 /*   print_r($_POST);*/
    
    $model = trim($_POST['model']);
    
    $nom = trim($_POST['nom']);
    
    $narx = $_POST['narx'];
    
    $info = trim($_POST['info']);
    
    $rasm = trim($_POST['rasm']);
    
    $id = $_POST['id'];
$sql = "UPDATE user SET model='$model', nom= '$nom', narx= '$narx', info= '$info', rasm= '$rasm' WHERE id='$id'";

if (mysqli_query($db, $sql)) {
    header("Location: index.php");
} else {
    echo "yangilanishda xatolik: " . mysqli_error($db);
}
}
mysqli_close($db);
?>
