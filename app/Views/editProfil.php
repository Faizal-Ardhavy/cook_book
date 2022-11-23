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
      <a href="formResep" class="w3-bar-item w3-button">Buat Resep</a>
      <a href="myResep" class="w3-bar-item w3-button">Resep Saya</a>
    </div>
  </div>
</div>

<!-- Header -->

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Edit Profil</h1>
    <p>Silahkan masukkan data diri anda dengan sesuai.</p>
    <form action="formProfile" method="post" enctype="multipart/form-data">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nama" required id="namaUser" name="namaUser"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Pekerjaan" required id="job" name="job"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="User id" required id="userId" name="userId"></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Email" required id="email" name="email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="No. Telp" required id="telp" name="telp"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">Konfirmasi</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->


</body>
</html>
