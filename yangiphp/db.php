<?php
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","loginsystem");
$db = @mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if($db)
{
    echo "\"php\" bazaga ulandi.";
}
else{
    echo "bazada xatolik";
}
?>