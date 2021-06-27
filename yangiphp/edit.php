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
<form action="internetdan.php" method="post">
    model:<input name="model" type="text" value="<?=$row['model']?>"><br><br>
    
    nom:<input name="nom" type="text" value="<?=$row['nom']?>"><br><br> 
    
    narx:<input name="narx" type="text" value="<?=$row['narx']?>"><br><br>
    
    info:<input name="info" type="text" value="<?=$row['info']?>"><br><br>
    
    rasm:<input name="rasm" type="text" value="<?=$row['rasm']?>"><br><br>
    
    <input name="id" type="hidden" value="<?=$row['id']?>">
    <button type="submit" name="edit">Tahrirlash</button>

</form>