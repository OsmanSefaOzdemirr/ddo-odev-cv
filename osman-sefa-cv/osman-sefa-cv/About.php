<?php
// Okul bilgilerini veritabanından alıyormuş gibi bir dizi olarak tanımlıyoruz
$schools = [
    [
        'name' => 'Muğla Sıtkı Koçman Üniversitesi',
        'degree' => 'Yazılım Mühendisliği',
        'start_year' => 2023,
        'end_year' => 'Devam Ediyor',
    ],
    [
        'name' => 'Anadolu Lisesi',
        'degree' => 'Lise Diploması',
        'start_year' => 2015,
        'end_year' => 2020,
    ]
];

$top = ["About", "Skills", "Experiences", "Contact"];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"/>
    <title>Hakkımda</title>
    <style>
        body {
            background: #f5f7fb; /* Yumuşak mavi tonları */
            font-family: 'Segoe UI', sans-serif;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        .opacity-25 h1, .opacity-75 h4 {
            text-align: center;
            font-weight: 600;
            color: #00796b;
        }

        .opacity-25 h1 {
            font-size: 3rem;
            text-transform: uppercase;
        }

        .opacity-75 h4 {
            font-size: 1.5rem;
            font-style: italic;
            color: #00796b;
        }

        /* Hakkımda metni için şık düzenlemeler */
        .shadow-lg {
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
            background: #ffffff;
        }

        section#about {
            padding: 40px;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .text-center h2 {
            color: #00796b;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .lead {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }

        .highlight {
            color: #388e3c;
            font-weight: bold;
        }

        .highlight-text {
            color: #00796b;
            font-style: italic;
        }

        .list-group-item {
            background-color: #e0f7fa;
            border: 1px solid #80deea;
            border-radius: 10px;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .list-group-item strong {
            color: #00796b;
            font-size: 1.2rem;
        }

        .list-group-item span {
            font-style: italic;
            color: #555;
        }

        .profile-image {
            border-radius: 50%;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }

        .btn-apply {
            background-color: #00796b;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .btn-apply:hover {
            background-color: #004d40;
            transform: translateY(-5px);
        }

        .profile-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
        }

        .profile-text {
            flex: 1;
        }

        .profile-image-container {
            flex: 0 0 250px;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php include("./partials/_header.php")?>
    <div class="container">
        <!-- Hakkımda Başlıkları -->
        <div class="row">
            <div class="col-12">
                <div class="opacity-25">
                    <h1>Hakkımda</h1>
                </div>
                <div class="opacity-75">
                    <h4>Osman Sefa Özdemir</h4>
                </div>
            </div>
        </div>

        <!-- Profil Bölümü -->
        <div class="row profile-section">
            <div class="col-md-8 profile-text">
                <div class="shadow-lg p-4 mb-4 bg-body-tertiary rounded">
                    <section id="about">
                        <h2 class="text-center">🎯 Hakkımda</h2>
                        <p class="lead">
                            Ben <span class="highlight">Osman Sefa Özdemir</span>, Muğla Sıtkı Koçman Üniversitesi Yazılım Mühendisliği 2. sınıf öğrencisiyim. 
                            Teknolojiyi nasıl çalıştığını anlamaya ve gerçek dünya problemlerini yazılımla çözmeye her zaman meraklı oldum.
                        </p>
                        <p>
                            Takım çalışmasında aktif rol almayı, etkili iletişim kurmayı ve analitik düşünmeyi seviyorum. 
                            Yapay zeka ve dijital iletişim konularında katıldığım ulusal kamplar sayesinde teknik bilgilerimi genişletirken, 
                            teknolojinin toplum üzerindeki etkisini de daha iyi kavradım.
                        </p>
                        <p>
                            Akademik hayatım dışında futbol oynamayı, spor salonuna gitmeyi ve Transformers izlemeyi seviyorum. 
                            Fiziksel olarak aktif kalmanın zihinsel üretkenliği de artırdığına inanıyorum. Ayrıca <span class="highlight-text">MaçMate</span> adını verdiğim, 
                            yerel futbolcuları eşleştiren bir mobil uygulama geliştiriyorum.
                        </p>
                        <p>
                            Nihai hedefim, bir gün kendi yazılım şirketim <span class="highlight">OSMind</span>'i kurarak insanların hayatını kolaylaştıran ve anlamlı hale getiren 
                            uygulamalar geliştirmek.
                        </p>
                    </section>
                </div>
            </div>
            
            <!-- Profil Resmi -->
            <div class="col-md-4 profile-image-container">
                <img src="./2.jpeg" class="img-fluid profile-image" alt="Osman Sefa Özdemir">
            </div>
        </div>

        <!-- Okullarım Bölümü -->
        <h3 class="text-center mt-5">🎓 Okuduğum Okullar</h3>
        <ul class="list-group mt-3">
            <?php foreach ($schools as $school): ?> 
                <li class="list-group-item">
                    <strong><?= $school['name'] ?></strong><br>
                    Bölüm: <?= $school['degree'] ?><br>
                    Başlangıç Yılı: <?= $school['start_year'] ?> <br>
                    Bitiş Yılı: <?= $school['end_year'] ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="text-center mt-5">
            <a href="#" class="btn-apply">Başvur</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

