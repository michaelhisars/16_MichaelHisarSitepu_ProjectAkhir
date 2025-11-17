

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update - Stefoods</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <body style="background-color: #cbcbcbff;">
        <div class="masuk">
            <br>
        <fieldset>
        <h2>Edit Data</h2>
        <a href="showdata.php"><button class="butback"><-</button></a>
        </fieldset>
        <br>
        <?php
        include 'koneksi.php';
        $kode_menu = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM data WHERE kode_menu='$kode_menu'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="ubah.php" >
                <table>
                    <tr>            
                        <td>Kode Menu: </td>
                        <td>
                            <input class="form-control" type="text" name="kode_menu" value="<?php echo $d['kode_menu']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Menu: </td>
                        <input type="hidden" name="kode_menu" value="<?php echo $d['kode_menu']; ?>">
                        <td><input class="form-control" type="text" name="nama_menu" value="<?php echo $d['nama_menu']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kategori: </td>
                    <td>
                        <select class="form-select" name="kategori">
                            <option disabled>Pilih Kategori</option>
                            <option value="Makanan" <?= $d['kategori']=='Makanan' ? 'selected' : '' ?>>Makanan</option>
                            <option value="Minuman" <?= $d['kategori']=='Minuman' ? 'selected' : '' ?>>Minuman</option>
                            <option value="Snack" <?= $d['kategori']=='Snack' ? 'selected' : '' ?>>Snack</option>
                            <option value="Dessert" <?= $d['kategori']=='Dessert' ? 'selected' : '' ?>>Dessert</option>
                        </select>
                    </td>

                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input class="form-control" type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
                    <tr>  
                        <td>Status</td>
                        <td><select class="form-select" name="status_ketersediaan" value="<?php echo $d['status_ketersediaan']; ?>">
                        <option disabled>Pilih Status</option>
                        <option value="Tersedia" <?=$d['status_ketersediaan']=='Tersedia' ? 'selected' : '' ?>>Tersedia</option>
                        <option value="Habis" <?=$d['status_ketersediaan']=='Habis' ? 'selected' : ''?>>Habis</option>
                        </select></td>    
                    </tr>
                    <tr>
                        <td valign="top">Deskripsi</td>
                        <td><textarea rows="5" class="form-control" type="text" name="deskripsi"><?php echo $d['deskripsi']; ?></textarea></td>
                    </tr>
                
                </table>
                <br>
                <button class="butsimpan" type="submit" value="SIMPAN">Submit</button>
            </form>
        </div>
            <?php 
        }
        ?>
        </div>
        <footer style="text-align:center; padding:12px 0; font-size:14px; color:#555;" class="footer bg-dark text-white mt-5 py-4">
  <p>Stefoods — 2025 Michael</p>
</footer>
    </body>
    <style>
body{
    background-image: url('bgmasuk.jpg');
    background-position: center;
    background-size: cover;
    margin: 0;
}

fieldset {
    display: flex;  
    gap: 160px;              
    padding: 10px 15px;
    align-items: center;
    text-align: center;
}
h2{
  font-family: "Poppins", sans-serif;
  font-weight: bold;
}
tr td{
    padding: 10px;
}
.butsimpan {
  width: 360px;
}
    </style>
</html>