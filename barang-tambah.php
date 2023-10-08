<h3>Tambah Barang</h3>

<form action="tampil.php" method="post">
    <table>
        <tr>
            <td width="130">ID Barang</td>
            <td><input type="text" name="ID"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="NAMA_BARANG"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="HARGA"></td>
        </tr>
        <tr>
            <td>Deskripsi Barang</td>
            <td><input type="text" name="DESKRIPSI"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>


</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into barang set
    ID ='$_POST[ID]',
    NAMA_BARANG ='$_POST[NAMA_BARANG]',
    HARGA ='$_POST[HARGA]',
    DESKRIPSI ='$_POST[DESKRIPSI]'");
    
    echo "Data Barang telah tersimpan";
}
?>