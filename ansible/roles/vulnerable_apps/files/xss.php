<?php

$file= $_GET['file'];
echo "Contents of $file<br>";
echo file($file);

echo '<a href="http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].'?name=test">try</a>';
#var_dump($_SERVER);

?>