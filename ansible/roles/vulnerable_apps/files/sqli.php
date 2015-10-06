<?php

//header('X-Frame-Options: DENY');

if(isset($_GET['ad']))
{
    $ad_id= $_GET['ad'];

    mysql_connect('localhost','root','mysql.root.pw') or die (mysql_error());
    mysql_select_db('vulnerable') or die (mysql_error());

    $query = 'SELECT ad_txt FROM ads WHERE ad_id='.$ad_id.';';
    $res = mysql_query($query) or die(mysql_error());
    if(mysql_num_rows($res) > 0)
    {
        $row = mysql_fetch_assoc($res);
        echo '<center><h3>'.$row['ad_txt'].'</h3></center>';
    }
}

echo '
        <form method=GET>
        Select AD to display:
        <select name="ad">';
        for($i=1;$i<=4;$i++) echo '<option '.($i==$ad_id?'selected':'none').' value="'.$i.'">'.$i.'</option>';
echo '  <input type=submit value="GO">
        ';

?>