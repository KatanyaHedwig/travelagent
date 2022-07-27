<?php
                    include "assets\mysql_connect\config.php";
                    $alert = mysqli_query($mysqli, "SELECT * FROM users");
                    $row = mysqli_fetch_array($alert);
                    $count = mysqli_num_rows($alert);
                    if ($count > 0) {
                      session_start();
                      $_SESSION['no'] = $row['no'];
                      $_SESSION['nama'] = $row['nama'];
                      $_SESSION['berangkat'] = $row['berangkat'];
                      $_SESSION['pulang'] = $row['pulang'];
                      $_SESSION['destinasi'] = $row['destinasi'];
                      $_SESSION['paket'] = $row['paket'];
                      $_SESSION['jumlah'] = $row['jumlah'];
                      $_SESSION['hp'] = $row['hp'];
                  }
                ?>
 
<html>
<head>    
    <title>Atur Jadwal</title>
</head>
 
<body>
<a href="add.php">Tambah Jadwal Baru</a>    <a href="Home.html">Kembali</a>
<br/>
<br/>
    <table width='80%' border=1>
    <tr>
        <th>No</th> 
        <th>Nama</th>
        <th>Tanggal Berangkat</th> 
        <th>Tanggal Pulang</th> 
        <th>Destinasi Wisata</th>
        <th>Pilihan Paket Wisata</th>
        <th>Jumlah Orang</th>
        <th>Nomor Handphone Aktif</th>
    </tr>
    
    <?php  
    while($row) {   
        echo "<td>".$row['no']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['berangkat']."</td>";
        echo "<td>".$row['pulang']."</td>"; 
        echo "<td>".$row['destinasi']."</td>"; 
        echo "<td>".$row['paket']."</td>"; 
        echo "<td>".$row['jumlah']."</td>";    
        echo "<td>".$row['hp']."</td>";
        // echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>