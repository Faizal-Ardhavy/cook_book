<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style_input.css" rel="stylesheet">
    <title>Form Resep</title>
</head>

<body>
    <div class="center">
        <button id="show">Buat resep</button>
    </div>
    <div class="popup">
        <div class="btn">&times;</div>
        <div class="container">
            <div class="title">Buat Resep</div>
            <div class="content">
                <form action="formAction" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Resep</span>
                        <input type="text" placeholder="Nama Resep" required id="namaResep" name="namaResep">
                    </div>
                    <div class="input-box">
                        <span class="details">Bahan Resep</span>
                        <input type="text" placeholder="Bahan Resep" required id="bahan" name="bahan">
                    </div>
                    <div class="input-box">
                        <span class="details">penjelasan Resep</span>
                        <input type="text" placeholder="Nama Resep" required id="penjelasan" name="penjelasan">
                    </div>
                    <div class="form-control mb-3">
                        <span class="details">Gambar Resep</span>
                        <input type="file" placeholder="Gambar Resep" required id="gambar" name="gambar" accept="image/x-png,image/gif,image/jpeg">
                    </div>
                </div>
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bahan Resep</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bahan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Penejelasan Resep</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="penjelasan"></textarea>
                    </div> -->
                    <div class="button">
                        <input type="submit" value="Buat Resep">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/popup.js"></script>
</body>

</html>