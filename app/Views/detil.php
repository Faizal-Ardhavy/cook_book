<!DOCTYPE html>
<html>

<head>
  <title>Detail Resep</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    body {
      font-family: "Times New Roman", Georgia, Serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Playfair Display";
      letter-spacing: 5px;
    }
  </style>
</head>

<body>

  <!-- Page content -->
  <div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
      <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="../../img/<?= $data[0]["gambar_resep"] ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
      </div>

      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center"><?= $data[0]["resep"] ?></h1><br>
        <h3 class="w3-center">Author: <?= $data[0]["author"] ?></h3>
        <h5 class="w3-center">Resep</h5>
        <p class="w3-large"><?= $data[0]["penjelasan_resep"] ?></p>
      </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="menu">
      <div class="w3-col l6 w3-padding-large">
        <h1 class="w3-center">Bahan Resep</h1><br>
        <h4><?= $data[0]["bahan"] ?></h4>
      </div>

      <div class="w3-col l6 w3-padding-large">
        <img src="../../img/<?= $data[0]["gambar_resep"] ?>" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
      </div>
    </div>

    <hr>


    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-32">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>

</body>

</html>