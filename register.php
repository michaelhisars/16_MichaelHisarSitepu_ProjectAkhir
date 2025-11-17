<?php
include 'koneksi.php';
if(isset($_POST['login'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO user (nama, tanggal_lahir, jeniskelamin, username, password) VALUES ('$nama', '$tanggal_lahir', '$jeniskelamin', '$username', '$password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal. Silakan coba lagi.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Stefoods</title>
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
          <a class="nav-link" href="index.php">Landing Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      </ul>
      <a href="login.php" class="login-btn active">Login</a>
    </div>
  </div>
</nav>


<div class="masuk">
  <br>
  <img src="logo.png" alt="logo" style="height:300px;">
  <br>
    <h2><b>Register</b></h2>
    <br>
    <form method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir" class="form-label">Tanggal Lahir</label></td>
                <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td><label for="jeniskelamin" class="form-label">Jenis Kelamin</label></td>
                <td><select class="form-select" name="jeniskelamin" required>
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input class="form-control" type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input class="form-control" type="password" name="password" placeholder="Password" required></td>
            </tr>
        </table>
        <br>
      <button class="butsimpan" type="submit" name="login">Submit</button>
    </form>
    <br>
    <p>Already have an account? <a href="login.php">Sign In</a></p>
    </div>
<footer style="text-align:center; padding:12px 0; font-size:14px; color:#555;" class="footer bg-dark text-white mt-5 py-4">
  <p>Stefoods — 2025 Michael</p>
</footer>
</body>
<style>    
    body{
    font-family: "Poppins", sans-serif;
    background-image: url('bgmasuk.jpg');
    background-position: center;
    background-size: cover;
    margin: 0;
    
}

tr td{
    padding: 10px;
}

.butsimpan {
  width: 368px;
  background-color: #c5966aff;
}

</style>
</html>