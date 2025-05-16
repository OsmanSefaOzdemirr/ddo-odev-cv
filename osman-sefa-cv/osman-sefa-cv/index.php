<?php

    $top = ["About","Skills","Experiences","Contact"];





?>
<?php  /* require_once("./config/configdb.php") */?>

<?php /*

    $query = "SELECT *  from top";
    $result = mysqli_query($baglanti,$query);

    $kategoriler = mysqli_fetch_all($result, MYSQLI_ASSOC)

    
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <style></style>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Osman Sefa</a>
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                <?php foreach($top as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item . '.php'; ?>">
                            <?php echo $item; ?>
                        </a>
                     </li>
                <?php endforeach; ?>

                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <div><h1>I'M</h1>
                <H3>OSMAN SEFA OZDEMIR</H3>
                <H6>YAZILIM MUHENDISLIGI 2. SINIF OGRENCISIYIM</H6>

                </div>
            </div>
            <div class="col">
                <img src="./1.jpeg" class="img-fluid">
            </div>
        </div>
    </div>
    </main>
</body>

</html>


<style>
  html, body {
    height: 100%;
    margin: 0;
  }

  main {
    min-height: 100vh; /* viewport yüksekliği kadar yer kaplar */
    display: flex;
    align-items: center; /* dikey ortalama */
    justify-content: center; /* yatay ortalama */
  }
</style>
