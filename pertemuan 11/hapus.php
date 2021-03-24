<?php 
            $sever ='localhost';
            $usernm ='root';
            $pass = '';
            $db = 'bukutamu';

    mysql_connect($sever,$usernm,$pass);
    mysql_select_db($db) or die ('I cannot connect to database because: '.mysql_error());


?>

<?php

$id = $_GET['id'];
$result = mysql_query("DELETE FROM tamu WHERE id=$id");
header("Location:lihat.php");


?>


