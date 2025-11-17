<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Stefoods</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #936438;">
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
          <a class="nav-link active underline" href="aboutus.php">About Us</a>
        </li>
      </ul>
      <a href="login.php" class="login-btn">Login</a>
    </div>
  </div>
</nav>

 <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carousel1.jpeg" class="d-block w-100" alt="Slide 1" />
        <div class="carousel-caption-bottom-right">
          <h3><b>About Us</b></h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="carousel.jpg" class="d-block w-100" alt="Slide 2" />
        <div class="carousel-caption-bottom-right">
          <h3><b>About Us</b></h3>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



   <div class="bg">
    <div class="cardkon">
      <img src="restoran.png" class="card-img-top" alt="...">
    </div>
    <div class="cardkon-text">
      <h1 class="photocard-title" style="text-align: left;">History</h1>
      <p>Stefoods started in 2008. The founder, Prof. Dr. Antonius Prawira, believed cooking was a serious kind of science. He took inspiration from the idea of the Tree of Knowledge—that things grow and spread—and made Stefoods an "Archive of Taste." Our goal is to take classic recipes and make them new and perfect using careful methods. Stefoods is known as a high-class food spot, a place where different flavors grow and change, giving guests a dining experience that feels both old-school and new at the same time.</p>
    </div>
  </div>
  <div class="bg dua">
    <div class="cardkon">
      <img style="width: 320px;" src="logo.png" class="card-img-top logo-img" alt="...">
    </div>
    <div class="cardkon-text">
      <h1 class="photocard-title" style="text-align: right;">Our Vision</h1>
      <p>To be a top restaurant known all over the world. We want to inspire people through great taste and be known for serving food that is not just delicious but also smart and thoughtful about where food comes from and where it is going.
      </p>
    </div>
  </div>
  <br><br>

  <h2 style="text-align:center; color:#1c1c1c;">Refined Dining, Redefined</h2>
  <p style='color:#1c1c1c; text-align:center; margin: 20px 150px 20px 150px;'>Stefoods is a premium culinary destination founded in 2008 on the principle that dining should be an art form executed with scientific precision. Our goal is clear: to be a globally recognized institution that inspires knowledge through taste, celebrated for serving food that is not just delicious but also smart and thoughtful about its journey. This commitment is reflected in our unwavering focus on the finest seasonal ingredients and refined, contemporary techniques. Stefoods has quickly become a highly regarded establishment for those seeking a perfect blend of classic intimacy and bold flavor innovation.<br><br>

The philosophy of elegance at Stefoods is fully realized in its atmosphere. The interior design blends warmth and luxury, using a palette of dark wood, brass gold, and rich fabrics to create an intimate, tranquil, and exclusive atmosphere. Careful lighting and a spacious layout ensure maximum comfort and privacy, making every visit special, whether for a crucial business meeting or a romantic celebration. This setting acts as the perfect backdrop for our culinary approach, which is built on a strict "source-to-table" commitment. Our chefs work directly with trusted suppliers, ensuring that every piece of organic produce, sustainably-sourced protein, and fresh seafood is at its absolute peak of quality before it reaches your plate.<br><br>

Ultimately, the true signature of Stefoods lies in the execution of the entire guest journey. Our expertise is focused on refining classic European and Asian dishes with a sophisticated modern touch, utilizing advanced culinary methods to unlock the deepest potential of every ingredient. This commitment extends to the front of house: the service is professional, attentive, and flawless. Our sommelier is always ready to guide guests through our curated global wine collection, offering perfect pairings. Stefoods is dedicated to creating moments of unforgettable hospitality, transforming a simple dinner into a true celebration of culinary craftsmanship and refined experience.</p><br>
<footer style="text-align:center; padding:12px 0; font-size:14px; color:#555;" class="footer bg-dark text-white mt-5 py-4">
  <p>Stefoods — 2025 Michael</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
<style>
    .card-text {
    font-size: 1.2rem;
    line-height: 1.5;
    margin-left: 20px;
    margin-right: 20px;
  }

  .bg {
    display: flex;
    gap: 32px;
    margin-bottom: 0px;
  }

  .bg.dua {
    flex-direction: row-reverse;
  }
</style>

</html>