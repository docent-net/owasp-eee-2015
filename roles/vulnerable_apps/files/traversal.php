<?php

if(isset($_GET['file']))
{
    $file= $_GET['file'];
    if(file_exists("/tmp/templates/".$file))
    {
        echo "Contents of $file<br>";
        echo file_get_contents("/tmp/templates/".$file);
    }
}

echo '
        <form method=GET>
        Enter template file to display:
        <input type=text size=20 name=file value="'.$file.'">
        <input type=submit value="GO">
        ';

?>