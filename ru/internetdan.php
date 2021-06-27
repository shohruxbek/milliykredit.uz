<?php
include 'db.php';
// Check connection
if (!$db) {
    die("Bog'lanishda xatolik: " . mysqli_connect_error());
}
if(isset($_POST['edit'])){

 /*   print_r($_POST);
 */
    $turkum = $_POST['turkum'];
    $model = $_POST['model'];
    
    $nom = $_POST['nom'];
    
    $narx = $_POST['narx'];

    $eskinarx = $_POST['narx'] * 1.05;
    
    $info = $_POST['info'];
    
    $rasm = $_POST['rasm'];
    
    $id = $_POST['id'];
$sql = "UPDATE user SET turkum='$turkum', model='$model', nom= '$nom', narx= '$narx', eskinarx= '$eskinarx', info= '$info', rasm= '$rasm' WHERE id='$id'";

if (mysqli_query($db, $sql)) {
    header("Location: indexs.php");
} else {
    echo "yangilanishda xatolik: " . mysqli_error($db);
}
}
mysqli_close($db);
?>
