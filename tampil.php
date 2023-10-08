<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <h2>Insert berhasil</h2>
    <br />
    <a href="barang-tambah.php"></a>
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['ID']; ?></td>
            <td><?php echo $d['NAMA_BARANG']; ?></td>
            <td><?php echo $d['HARGA']; ?></td>
            <td><?php echo $d['DESKRIPSI']; ?></td>
        </tr>
        <?php 
		}
		?>
    </table>
</body>

</html>