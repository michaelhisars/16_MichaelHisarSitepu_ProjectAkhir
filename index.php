<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stefoods Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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
          <a class="nav-link active underline" href="index.php">Landing Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
      </ul>
      <a href="login.php" class="login-btn">Login</a>
    </div>
  </div>
</nav>

<div class="hero">
  <div class="hero-text">
    <h1>Good Food, Made with Care.</h1>
    <p>Every dish is thoughtfully prepared to bring together comfort, freshness, and premium quality.</p>
    <a href="register.php" class="btn btn-light" style="font-weight:600;">Get Started ></a>
  </div>
</div>


<h1 class="section-title">Why Choose Us</h1>

<div class="container">
  <div class="row g-3">

    <div class="col-md-4">
      <div class="card h-100">
        <img src="card1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Uncompromising Quality</h5>
          <p class="card-text">We maintain high standards in every dish we serve.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="card2.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Consistent Excellence</h5>
          <p class="card-text">From ingredients to plating, we deliver refinement.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="card3.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Loved by Food Enthusiasts</h5>
          <p class="card-text">Trusted by diners who seek exceptional taste.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<p class="about-text">
At Stefoods, every dish is crafted with passion, precision, and premium ingredients. 
Experience luxury dining where taste, texture, and presentation blend in perfect harmony.
</p>


<footer class="footer bg-dark text-white">
  <p>Stefoods — 2025 Michael</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
