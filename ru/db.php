<?php
define("DBHOST","localhost");
//define("DBUSER","root");
//define("DBPASS","");
//define("DBNAME","phpcourse");
define("DBUSER","milliykr_phpcourse");
define("DBPASS","123dty321*mk");
define("DBNAME","milliykr_phpcourse");
$db = @mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
/*if($db)
{
    echo "\"php\" bazaga ulandi.";
}
else{
    echo "bazada xatolik";
}*/
?>