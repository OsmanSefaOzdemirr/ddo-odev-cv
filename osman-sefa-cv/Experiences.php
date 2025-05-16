<?php

$top = ["About", "Skills", "Experiences", "Contact"];

$hobbies = [
  [
    "icon" => "🎮",
    "title" => "Bilgisayar Oyunları",
    "text" => "Stratejik düşünce ve reflekslerimi geliştirmemi sağlayan fps oyunları ile ilgileniyorum. E-spor seviyesi hedefimdi. Artık değil.."
  ],
  [
    "icon" => "⚽",
    "title" => "Futbol",
    "text" => "Kendimi bildiğimden beri yaptığım spor olarak başladığım bu serüven benim için bir tutkuya dönüştü. Profesyonellik hedefimdi. Artık değil.."
  ],
  [
    "icon" => "🏋️",
    "title" => "Fitness",
    "text" => "Düzenli spor yaparak bedenimi ve zihnimi geliştiriyorum. Formda kalmak ve güçlenmek benim için önemli."
  ],
  [
    "icon" => "🏓",
    "title" => "Masa Tenisi",
    "text" => "Hem sosyal hem de rekabetçi yapısıyla masa tenisi vazgeçilmez aktivitelerimden biri."
  ],
  [
    "icon" => "🎧",
    "title" => "Müzik Dinlemek",
    "text" => "Çalışırken ve dinlenirken müzik bana ilham ve huzur veriyor. Ruh halime göre liste değiştiririm."
  ]
];

$personalInfo = [
  "B2 Sınıfı Ehliyet sahibi",
  "Bekar",
  "Askerlik yapmamış",
  "Hafız ve Hafızlık Belgesi Sahibi"
];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hobiler & Temel Bilgiler</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #e0f7fa, #ffffff);
      font-family: 'Segoe UI', sans-serif;
      padding-bottom: 50px;
    }
    .section-title {
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 20px;
      text-align: center;
      color: #1a237e;
    }
    .card-hobby {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-hobby:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .card-hobby .card-body {
      background: linear-gradient(145deg, #f1f8e9, #ffffff);
    }
    .hobby-icon {
      font-size: 2rem;
      margin-bottom: 10px;
      display: inline-block;
      color: #00796b;
    }
    .basic-info {
      background: #f5f5f5;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
    .basic-info h4 {
      color: #2e7d32;
      border-bottom: 2px solid #a5d6a7;
      padding-bottom: 10px;
    }
    .basic-info ul {
      list-style: none;
      padding: 0;
    }
    .basic-info ul li::before {
      content: '✔️';
      margin-right: 8px;
      color: #388e3c;
    }
  </style>
    
</head>
<body>
  <?php include("./partials/_header.php")?>
  <div class="container py-5">
    <h2 class="section-title">🎯 Hobilerim</h2>
    <div class="row g-4">
      <?php foreach ($hobbies as $hobby): ?>
        <div class="col-md-<?= count($hobbies) <= 3 ? '4' : '6' ?>">
          <div class="card card-hobby">
            <div class="card-body text-center">
              <div class="hobby-icon"><?= $hobby["icon"] ?></div>
              <h5 class="card-title"><?= $hobby["title"] ?></h5>
              <p class="card-text"><?= $hobby["text"] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <h2 class="section-title">📋 Temel Bilgiler</h2>
    <div class="basic-info mt-4">
      <h4>Kişisel Bilgiler</h4>
      <ul>
        <?php foreach ($personalInfo as $info): ?>
          <li><?= $info ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
