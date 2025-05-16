<?php $top = ["About", "Skills", "Experiences", "Contact"];?>


<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İletişim</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f3f4f6;
      font-family: 'Segoe UI', sans-serif;
    }
    .contact-header {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 30px;
      font-size: 2.5rem;
      color: #1a237e;
    }
    .contact-info {
      text-align: center;
      margin-bottom: 30px;
    }
    .contact-info a {
      margin: 10px;
      font-size: 1.25rem;
      color: #00796b;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .contact-info a:hover {
      color: #004d40;
    }
    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .form-container .form-control {
      border-radius: 10px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <?php include("./partials/_header.php")?>
  <div class="container">
    <h1 class="contact-header">İletişime Geçin</h1>
    
    <!-- Contact Information -->
    <div class="contact-info">
      <p><strong>Beni sosyal medyada takip edin!</strong></p>
      <a href="https://www.instagram.com/osmansefaozdemir" target="_blank">Instagram</a>
      <a href="https://www.linkedin.com/in/osmansefaozdemir" target="_blank">LinkedIn</a>
      <a href="osmansefaozdemir32@hotmail.com">E-posta</a>
      <p><strong>Telefon:</strong> +90 534 386 9939</p>
    </div>

    <!-- Contact Form -->
    <div class="form-container">
      <h4>Mesajınızı Bırakın</h4>
      <form action="submit_form.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Adınız</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-posta Adresiniz</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Mesajınız</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
