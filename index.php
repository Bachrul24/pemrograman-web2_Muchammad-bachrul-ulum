<html>
</head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="container">
		<h1>Buku Tamu</h1>
		<h4>Silahkan isi buku tamu di bawah ini dan Tinggalkan Pesan!</h4>
 <form action="" method="post">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" placeholder="Nama Lengkap" required /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat" placeholder="alamat" required /></p>
     
            <b>Jenis Kelamin :</b> <br>
			<input type="radio" name="jeniskelamin" value="Pria" checked>Pria
            <input type="radio" name="jeniskelamin" value="Wanita">Wanita
     
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Hai, Semangat terus" required></textarea></p>
     
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
            
		</form>
        <p><a href="lihat.php"><h4>Lihat Data</h4></a></p>
        
        
        <?php
		if(isset($_POST['go'])){
            $sever ='localhost';
            $usernm ='root';
            $pass = '';
            $db = 'bukutamu';

    mysql_connect($sever,$usernm,$pass);
    mysql_select_db($db) or die ('I cannot connect to database because: '.mysql_error());

			$nama	= htmlentities(mysql_real_escape_string($_POST['nama']));
			$alamat	= htmlentities(mysql_real_escape_string($_POST['alamat']));
			$jeniskelamin	= htmlentities(mysql_real_escape_string($_POST['jeniskelamin']));
			$pesan	= htmlentities(mysql_real_escape_string($_POST['pesan']));

			if($nama && $alamat && $jeniskelamin && $pesan){
                
					$in = mysql_query("INSERT INTO tamu VALUES('$nama', '$alamat', '$jeniskelamin', '$pesan','')");
					if($in){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
					}else{
						echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
					}
                }
            
            else {
				echo '<div id="error">Uppsss...! Lengkapi form!</div>';
			}
		}
		?>
        
	</div>

</body>
</html>