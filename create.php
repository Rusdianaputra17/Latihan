<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="dashboard-body">
<div class="dashboard">

 <!-- SIDEBAR -->
    <header class="sidebar">
      <h1>My Blog</h1>

      <ul class="menu">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="create.php" class="active">Blog</a></li>
        <li><a href="members.php">Table</a></li>
        <li><a href="profil.php">Profil</a></li>
      </ul>
    </header>

  <main>
    <section>
      <form action="simpan.php" method="post" enctype="multipart/form-data">

        <div class="row">
          <label for="judul">Judul</label>
          <input type="text" id="judul" name="judul" required>
        </div>

        <div class="row">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>

        <div class="row">
          <label for="isi">Isi Konten</label>
          <textarea id="isi" name="isi" rows="6" required></textarea>
        </div>

        <hr>

        <div class="row">
          <label for="thumbnail">Upload Thumbnail</label>
          <input type="file" id="thumbnail" name="thumbnail" accept="image/*" required>
        </div>

        <div class="row">
          <button type="submit">Upload</button>
        </div>

      </form>
    </section>
  </main>

</div>
</body>
</html>
