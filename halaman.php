<?php
$conn = mysqli_connect("localhost", "root", "", "prakweb_2023_C_213040085");

$result = mysqli_query($conn, "SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar" style= "background-color: #D2E0FB;">
      <div class="container-fluid">
        <a class="navbar-brand">YourBOOK</a>
      </div>
    </nav>

    <div class="card-body row justify-content-start ms-4 mt-4">

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <div class="card mb-4 me-4" style="width: 18rem;">
        <img src="image/<?php echo $row["gambar_buku"]; ?>" class="card-img-top mt-2" height="400" >
        <div class="card-body">
          <h4 class="card-title"><?php echo $row["judul_buku"]; ?></h4>
          <p>Nama Penulis : <?php echo $row["nama_penulis"]; ?></p>
          <p>Nama Penerbit : <?php echo $row["nama_penerbit"]; ?></p>
          <p>Tahun Terbit : <?php echo $row["tahun_terbit"]; ?></p>
        </div>
      </div>
          <?php endwhile;?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>