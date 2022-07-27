<html>
<head>
	<title>Ambil Jadwal</title>
</head>
 
<body>
	<a href="About.php">Kembali</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
            <tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr> 
				<td>Tanggal Berangkat</td>
				<td><input type="date" name="berangkat"></td>
			</tr>
            <tr> 
				<td>Tanggal Pulang</td>
				<td><input type="date" name="pulang"></td>
			</tr>
            <tr> 
				<td>Destinasi Wisata</td>
				<td>
				<select class="combo" name="destinasi">
					<option value="" selected="selected" disabled>--- Pilih salah satu ---</option>
					<option value="Keliling Kota">Berkeliling Kota</option>
					<option value="Solo Travel">Backpacker Trip</option>
					<option value="Piknik">Piknik Keluarga</option>
					<option value="Trip Romantis">Tur Romantis</option>
					<option value="Bersepeda">Bersepeda</option>
					<option value="Mendaki">Mendaki</option>
					
					
				</select>
				</td>
			</tr>
            <tr> 
				<td>Pilihan Paket Wisata</td>
				<td>
					<select class="combo" name="paket">
						<option value="" selected="selected" disabled>--- Pilih salah satu ---</option>
						<option value="Tur Keliling Kota">Tour Berkeliling Kota</option>
						<option value="Tur Piknik Keluarga">Tour Piknik Keluarga</option>
						<option value="Trip Backpacker">Trip Backpacker</option>
						<option value="Tur Bersepeda">Tour Bersepeda</option>
						<option value="Tur Romantis">Tour Romantis</option>
						<option value="Tur Mendaki">Tour Mendaki</option>					
					</select>
				</td>
			</tr>
			<tr> 
				<td>Jumlah Orang</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr> 
				<td>Nomor Handphone</td>
				<td><input type="text" name="hp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		"NULL";
		$nama = $_POST['nama'];
		$berangkat = $_POST['berangkat'];
		$pulang = $_POST['pulang'];
        $destinasi = $_POST['destinasi'];
		$paket = $_POST['paket'];
		$jumlah = $_POST['jumlah'];
        $hp = $_POST['hp'];
		
		// include database connection file
		include_once("assets\mysql_connect\config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(no,nama,berangkat,pulang,destinasi,paket,jumlah,hp) VALUES('NULL','$nama','$berangkat','$pulang','$destinasi','$paket','$jumlah','$hp')");
		
		// Show message when user added
		echo "User added successfully.<a href='About.php'>View Users</a>";
	}
	?>
</body>
</html>