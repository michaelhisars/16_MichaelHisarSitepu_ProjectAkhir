
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data - Stefoods</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
          <a class="nav-link active underline" href="showdata.php">Show Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php">Input Data</a>
        </li>
      </ul>
      <a href="index.php" class="login-btn">Logout</a>
    </div>
  </div>
</nav>
    <div class="table1">
        <br>
        <fieldset>
            <legend>Data Foods & Beverages</legend>
            <a href="tambah.php"><button>+</button></a>
        </fieldset>

        <table border="1">
            <tr>
                <th>Kode Menu</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status Ketersediaan</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * from data");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>    
                    <td><?php echo $d['kode_menu']; ?></td>
                    <td><?php echo $d['nama_menu']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['status_ketersediaan']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['kode_menu']; ?>" class="button">UPDATE</a>
                        <a href="delete.php?id=<?php echo $d['kode_menu']; ?>" class="button red">DELETE</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
        </div>
        <footer style="text-align:center; padding:12px 0; font-size:14px; color:#555;" class="footer bg-dark text-white mt-5 py-4">
  <p>Stefoods — 2025 Michael</p>
</footer>
</body>
<style>
body{
    background-color: #f5f5f5;
}

table, th, td {
    border: 1px lightgray solid;
    border-collapse: collapse;
    padding: 10px;  
}
th {
    background-color: #936438;
    color: #ffffff;
}
td {
    background-color: #ffffff;}

button {
  background-color: #936438;
  border: none;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.button {
  background-color: #936438;
  border: none;
  color: white;
  padding: 6px 12px;
  font-size: 14px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: block; 
  margin-bottom: 8px;
}
.button.red {
  background-color: #C0392B;
  border: none;
  margin-bottom:0px;
}
fieldset {
    display: flex;
    align-items: center;     
    gap: 10px;              
    padding: 10px 15px;
}
legend {
    font-weight: bold;
    padding: 0 10px;
    text-align: left;
    font-family: "Poppins", sans-serif;
    font-size: 24px;
}

</style>
</html>