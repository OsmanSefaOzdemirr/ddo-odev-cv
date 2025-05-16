<?php
    $top = ["About", "Skills", "Experiences", "Contact"];

    // Veritabanından çekiliyormuş gibi varsayalım
    $courses = [
        [
            "title" => "Introduction to Programming",
            "language" => "Java",
            "icon" => "fab fa-java",
            "description" => "Genel olarak programlamanın mantığını öğrendim. Yazılım dilleri nedir, nasıl çalışır, interprinter ve compiler mantığını anlatıldı.",
            "term" => "Güz 2023"
        ],
        [
            "title" => "Object-Oriented Programming",
            "language" => "Java",
            "icon" => "fab fa-java",
            "description" => "Nesne yönelimli programlamanın temel kavramlarını öğrendim: sınıflar, nesneler, kalıtım, çok biçimlilik ve kapsülleme. Uygulamalı projelerle desteklendi.",
            "term" => "Bahar 2023"
        ],
        [
            "title" => "Algorithm and Data Structures",
            "language" => "C / Java",
            "icon" => "fas fa-code",
            "description" => "Temel veri yapıları (diziler, bağlı listeler, ağaçlar, yığınlar, kuyruklar) ve algoritmalar (arama, sıralama, grafik algoritmaları) üzerine teorik bilgi ve uygulamalar yaptım. Bellek kullanımı ve zaman karmaşıklığı analizleri ile optimizasyon kavramlarına giriş yaptım.",
            "term" => "Güz 2024"
        ],
        [
            "title" => "Web Development",
            "language" => "HTML, CSS, JavaScript",
            "icon" => "fab fa-html5",
            "description" => "Modern web sayfaları oluşturarak kullanıcı arayüzü tasarımı ve etkileşimli dinamik içeriklerin yapımını öğrendim. Bootstrap, DOM ve form işlemleri gibi konular işlendi.",
            "term" => "Bahar 2024"
        ],
        [
            "title" => "Database Systems",
            "language" => "SQL / MySQL",
            "icon" => "fas fa-database",
            "description" => "Veritabanı tasarımı, normalizasyon, ilişkisel veri modeli ve SQL sorguları konularında teorik ve pratik bilgi edindim. MySQL Workbench uygulamaları yapıldı.",
            "term" => "Bahar 2025"
        ]
    ];

    $languages = [
        [
            "name" => "Türkçe",
            "icon" => "fas fa-language",
            "level" => "C2 (Ana Dil)",
            "description" => "Anadilim. Akademik ve günlük iletişimde ileri düzeyde kullanabiliyorum.",
            "color" => "bg-success"
        ],
        [
            "name" => "İngilizce",
            "icon" => "fas fa-globe",
            "level" => "B2 - Upper Intermediate",
            "description" => "Yazılım dokümantasyonlarını okuma, teknik konuşmalar yapma ve yazılı iletişim kurma konusunda yetkinim.",
            "color" => "bg-primary"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Osman Sefa | Yetkinlikler</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      font-family: 'Segoe UI', sans-serif;
      color: white;
      margin: 0;
    }
    .container {
      padding: 50px 0;
    }
    .section-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 600;
      margin-bottom: 40px;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: none;
      border-radius: 15px;
      transition: transform 0.3s;
      height: 100%;
    }
    .card:hover {
      transform: scale(1.03);
    }
    .card-body h5 {
      font-weight: bold;
    }
    .card-footer {
      background-color: rgba(0, 0, 0, 0.2);
      font-size: 0.9rem;
    }
    .language-tag {
      display: inline-block;
      background-color: rgba(0, 123, 255, 0.8);
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      margin-top: 10px;
    }
    @media (max-width: 768px) {
      .section-title {
        font-size: 2rem;
      }
    }
  </style>
  <?php include("./partials/_header.php")?>
</head>
<body>

  <div class="container">
    <h2 class="section-title">📚 Aldığım Dersler</h2>
    <div class="row g-4">
        <?php include("./partials/_courses.php")?>
    </div>
  </div>

  <div class="container mt-5">
    <h2 class="section-title">🌍 Öğrendiğim Diller</h2>
    <div class="row g-4">
        <?php include("./partials/_languages.php")?>
    </div>
  </div>

</body>
</html>
