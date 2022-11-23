<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">My Cook Book</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="beranda" class="w3-bar-item w3-button">Home</a>
      <a href="#contact" class="w3-bar-item w3-button">Buat Resep</a>
      <a href="myResep" class="w3-bar-item w3-button">Resep Saya</a>
    </div>
  </div>
</div>

<!-- Header -->


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="../img/about_res.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Tentang Kami</h1><br>
      <h5 class="w3-center">Cook Book 2022</h5>
      <p class="w3-large">Cookbook merupakan aplikasi yang dikembangkan oleh dua orang developer dari jurusan Ilmu Komputer yaitu <span class="w3-tag w3-light-grey">Muhammad Faizal Ardhavy Heru</span>  serta rekannya<span class="w3-tag w3-light-grey">Ega Anzani</span> yang keduanya memiliki visi yang besar dalam dunia pemrograman terkhususnya pemrograman web lanjut</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Semoga dengan adanya website ini dapat membantu para koki-koki muda yang diluar sana untuk saling berbagi resep makanan bersama.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Contoh Menu</h1>
      <p class="w3-large w3-text-grey w3-hide-medium">Dibawah ini adalah contoh menu yang mungkin bisa menjadi referensi anda untuk menambahkan menu di website kami.</p>

      <h4>STARTER</h4>
      <p class="w3-text-grey">Menu yang biasanya dihidangkan pertama kali kepada customer sebelum dihidangnya makanan utama.</p><br>
    
      <h4>SEAFOOD</h4>
      <p class="w3-text-grey">Menu makanan yang dihidangkan terdiri dari makanan yang berasal dari laut.</p><br>
    
      <h4>CHEF'S SPECIAL</h4>
      <p class="w3-text-grey">Menu khusus yang hanya bisa dilakukan oleh chef tertentu.</p><br>
    
      <h4>DESSERT</h4>
      <p class="w3-text-grey">Makanan penutup setelah hidangan utama di sediakan.</p><br>
    
      <h4>MAIN DISHES</h4>
      <p class="w3-text-grey">Hidangan utama dari restaurant.</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="../img/menu.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Input Resep</h1>
    <p>Silahkan masukan resep yang ingin anda masukkan.</p>
    <form action="formAction" method="post" enctype="multipart/form-data">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nama Resep" required id="namaResep" name="namaResep"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Bahan Resep" required id="bahan" name="bahan"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Deskripsi" required id="penjelasan" name="penjelasan"></p>
      <p><input class="w3-input w3-padding-16" type="file" placeholder="Gambar Resep" required id="gambar" name="gambar" accept="image/x-png,image/gif,image/jpeg"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->


</body>
</html>
