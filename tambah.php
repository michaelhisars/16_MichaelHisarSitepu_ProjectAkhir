
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Stefoods</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body background="bgmasuk.jpg">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  
    <a class="navbar-brand brand-logo" href="#">
      <img src="logo.png" alt="logo" style="height:45px;">
      Stefoods
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="showdata.php">Show Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active underline" href="tambah.php">Input Data</a>
        </li>
      </ul>
      <a href="index.php" class="login-btn">Logout</a>
    </div>
  </div>
</nav>
    <div align="center">
      
      
    <div class="masuk">
      <br>
      <fieldset>
        <h2>Input Data</h2>
        <a href="showdata.php"><button class="butback"><-</button></a>
        </fieldset>
  <br>
    <form method="POST" action="tambahaksi.php">
        <table>
            <tr>
                <td><label for="kode_menu">Kode Menu: </label></td>
                <td><input class="form-control" type="text" name="kode_menu" placeholder="Cth: M0001"></td>
            </tr>
            <tr>
                <td><label for="nama_menu">Nama Menu: </label></td>
                <td><input type="text" class="form-control" name="nama_menu" placeholder="Cth: French Fries"></td>
            </tr>
            <tr>
                <td><label for="kategori">Kategori: </label></td>
                <td><select class="form-select" name="kategori">
                <option selected disabled>Pilih Kategori</option>
                <option>Makanan</option>
                <option>Minuman</option>
                <option>Snack</option>
                <option>Dessert</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga: </label></td>
                <td><input class="form-control" type="int" name="harga" placeholder="Cth: 45000"></td>
            </tr>
            <tr>
                <td><label for="status_ketersediaan">Status: </label></td>
                <td><select class="form-select" name="status_ketersediaan">
                <option selected disabled>Status</option>
                <option>Tersedia</option>
                <option>Habis</option>
                </select>
                </td>
            </tr>
            <tr>
                <td valign="top"><label for="deskripsi">Deskripsi: </label></td>
                <td><textarea rows="5" class="form-control" type="deskripsi" name="deskripsi" placeholder="deskripsi barang...."></textarea></td>
            </tr>
        </table>
        <br>
        <a><button class="butsimpan" type="submit">Simpan Data</button></a>
    </form>
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
    gap: 150px;              
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

</style>
</html>