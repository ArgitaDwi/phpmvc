<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman <?= $data['judul']; ?> </title>
</head>
<body>

<div class="container">
    <div class="jumbotron mt-4 container-expand-lg contener-primary bg-primary"> 
<h1 class="display-4"> Selamat Datang! Dijurusan RPL 
<img src="<?= BASE_URL; ?>/img/logorpl.png" alt="Argita-foto" width="300" class="rounded-circle shadow"><br>
</h1>
<p>RPL  <?= $data['nama']; ?> </p>
<hr class="my-4">
<p>Jurusan Rekayasa Perangkat Lunak tentunya, dapat memasuki semua bidang industri kerja, karena tidak hanya membahas seputar software computer. Jurusan RPL juga mempelajari pemrograman, mulai dari website, android, hingga dekstop.</p>
<a  class="btn btn-dark btn-lg" href="#" role="button">Learn More</a>
</div>
</div>
</div>
</body>
</html>

