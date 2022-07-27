<?php
// include database connection file
include_once("assets\mysql_connect\config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $berangkat = $_POST['berangkat'];
    $pulang = $_POST['pulang'];
    $destinasi = $_POST['destinasi'];
    $paket = $_POST['paket'];
    $jumlah = $_POST['jumlah'];
    $hp = $_POST['hp'];		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',berangkat='$berangkat',pulang='$pulang',destinasi='$destinasi',paket='$paket',jumlah='$jumlah',hp='$hp' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	//<!-- header("Location: About.php");-->
}
?>

<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>	
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Jadwal Berangkat</td>
				<td><input type="text" name="berangkat" value=<?php echo $berangkat;?>></td>
			</tr>
			<tr> 
				<td>Jadwal Pulang</td>
				<td><input type="text" name="pulang" value=<?php echo $pulang;?>></td>
			</tr>
            <tr> 
				<td>Destinasi Wisata</td>
				<td><input type="text" name="destinasi" value=<?php echo $destinasi;?>></td>
			</tr>
            <tr> 
				<td>Pilihan Paket Wisata</td>
				<td><input type="text" name="paket" value=<?php echo $paket;?>></td>
			</tr>
            <tr> 
				<td>Jumlah Orang</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
			</tr>
            <tr> 
				<td>Nomor Handphone</td>
				<td><input type="text" name="hp" value=<?php echo $hp;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>