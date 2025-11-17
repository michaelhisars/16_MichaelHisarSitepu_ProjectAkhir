<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        echo "<script>alert('Login Berhasil.'); window.location='showdata.php';</script>";
    } else {
        echo "<script>alert('Login gagal: Username atau password salah.');</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Stefoods</title>
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
      <a href="register.php" class="login-btn active">Register</a>
    </div>
  </div>
</nav>

<div class="masuk">
  <br>
    <img src="logo.png" alt="logo" style="height:300px;">
    <form method="POST">
        <table>
            <tr>
                <td><input class="form-control" type="text" name="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><input class="form-control" type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="login">Sign In</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <p>
        Don't have an account? <a href="register.php">Sign Up</a>
        </p>
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

button {
  background-color: #c5966aff;
  border: none;
  color: #f7f7f7;
  padding: 10px 20px;
  width: 400px;
  font-size: 16px;
  border-radius: 12px;
  font-weight: bold;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
</style>
</html>