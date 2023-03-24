<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawit Wahib - 201011400274</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../asset/custom.css" />
</head>
<body class="bg-dark-subtle">
  
<div class="container">
  <div class="card m-4 ms-lg-2 bg-light-subtle" id="my-card">
    <div class="card-body p-4">
      <h4>Latihan Soal Pertemuan 7</h4>
      <div class="border p-4 rounded">
          <h5 class="text-center">Materi Pemrograman PHP</h5>
        <hr>
  <?php 
    function pilihopsi($opsi){
      if ($opsi == '1') {
        include('uas.php');
      } elseif ($opsi == '2') {
        include('kalkulator.php');
      } elseif ($opsi == '3') {
        include('loop.php');
      } elseif ($opsi == '4') {
        include('matrix.php');
      } else {
        echo '<span class="alert alert-info">Pilihan Tidak Valid </span>';
      }
    }
      $message = null;
      if (isset($_GET['opsi'])) {
        pilihopsi($_GET['opsi']);
      } else {?>
          <p>[1] Penggunaan IF</p>
          <p>[2] Penggunaan SWITCH ... CASE</p>
          <p>[3] Penggunaan Looping</p>
          <p>[4] Penggunaan Array</p>
          <p>Pilih Materi yang ingin anda pelajari</p>
          <form action="" method="get">
              <input type="text" name="opsi" placeholder="1/2/3/4">
              <button class="btn btn-success btn-small " type="submit">Submit</button>
          </form>
        <?php }?>
          </div>
        </div>
    </div>
</div>
   
<script src="../../asset/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
