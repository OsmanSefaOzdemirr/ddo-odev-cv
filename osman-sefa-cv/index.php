<?php
    $top = ["About", "Skills", "Experiences", "Contact"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osman Sefa Özdemir – CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }
        .hero {
            background: linear-gradient(to right, #007bff, #00bcd4);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .nav-link.active {
            font-weight: bold;
            color: #007bff !important;
        }
        .card:hover {
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
            transform: translateY(-3px);
            transition: all 0.3s ease-in-out;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Osman Sefa Özdemir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach ($top as $item): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo strtolower($item); ?>.php"><?php echo $item; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="hero">
    <h1 class="display-4">Hoş Geldiniz</h1>
    <p class="lead">Ben Osman Sefa Özdemir. Yazılım geliştirici, eğitmen ve teknoloji meraklısı.</p>
</div>

<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-3">
            <div class="card p-3">
                <h5>About</h5>
                <p>Kendimi ve geçmişimi tanıttığım sayfa.</p>
                <a href="about.php" class="btn btn-outline-primary btn-sm">Görüntüle</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5>Skills</h5>
                <p>Yazılım ve teknik becerilerim.</p>
                <a href="skills.php" class="btn btn-outline-primary btn-sm">Görüntüle</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5>Experiences</h5>
                <p>İş ve proje deneyimlerim.</p>
                <a href="experiences.php" class="btn btn-outline-primary btn-sm">Görüntüle</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <h5>Contact</h5>
                <p>Benimle iletişime geçmek için.</p>
                <a href="contact.php" class="btn btn-outline-primary btn-sm">Görüntüle</a>
            </div>
        </div>
    </div>
</div>

<footer>
    &copy; <?php echo date('Y'); ?> Osman Sefa Özdemir. Tüm hakları saklıdır.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
