<?php

$sever ='localhost';
$usernm ='root';
$pass = '';
$db = 'bukutamu';

    mysql_connect($sever,$usernm,$pass);
    mysql_select_db($db) or die ('I cannot connect to database because: '.mysql_error());

$result = mysql_query("SELECT * FROM tamu ORDER BY id DESC");
    
?>
    
<html>
<head>    
    <title>Lihat Data</title>
</head>
 <link rel="stylesheet" href="style.css">
<body>
    <h1>Data Buku Tamu</h1>
    
    <h3><a href="index.php">Masukan data baru</a></h3>

    <table border="1px" cellspacing="0">
        <tr bgcolor='#CCCCCC' class="garis">
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Pesan</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysql_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['nama']."</td>";
            echo "<td>".$res['alamat']."</td>";
            echo "<td>".$res['jeniskelamin']."</td>";
            echo "<td>".$res['pesan']."</td>";  
            
            echo "<td style='text-align:center;'><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"hapus.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>

</html>