<?php
    session_start();
    $dir = "tugas/";
    $files = scandir($dir);
    natsort($files);
?>
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
    <link rel="stylesheet" href="asset/custom.css" />
  </head>
  <body class="bg-dark-subtle">
  <nav class="navbar navbar-expand-sm bg-light-subtle border-bottom shadow sticky-top">
  <div class="container-fluid mx-3">
    <a class="navbar-brand" href="#">Pawit Wahib</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <div class="d-flex">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="toggleSwitch" />
            <label class="form-check-label" for="switch">
              <span class="text-dark"><i class="bi bi-sun"></i></span>
              <span class="text-light"><i class="bi bi-moon"></i></span>
            </label>
        </div>
      </div>
    </div>
  </div>
</nav>
  <div class="row g-0 mt-2">
    <div class="col-md-3 pt-4 col-sm-12 h-100">
      <div class="card mx-4 border bg-light-subtle">
        <div class="card-header px-4">
          <h5>Daftar Tugas </h5>
          <h6>Pemrograman Web 2</h6>
        </div>
        <div class="card-body p-4">
          <div class="list-group">
            <?php foreach($files as $file) {
                if(substr($file, -4) === ".php") {
                    if (isset($_GET['page'])) {
                      $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                    }
                  ?>
                    <a class="list-group-item hvr-forward list-group-item-action <?php if ($page == $file) {
                      echo "active";
                    } ?>" href="<?php echo '?page=' . $file; ?>">
                      <span class="d-flex justify-content-between">
                        <?php echo $file; ?>
                        <i class="bi bi-arrow-right"></i>
                      </span>
                    </a>
                    <?php } ?>
                <?php } ?>
              </div>
              <div class="text-center mt-4">
                fork this project on my <a href="https://github.com/kapawit/pemrogramanWeb2.git">Github</a>
              </div>
          </div>
        </div>
    </div>
    <div class="col-md-9 pt-4 col-sm-12 vh-80">
      <div class="card mx-4 ms-lg-2 bg-light-subtle" id="my-card">
        <div class="card-header">
          <?php if(isset($_GET['page'])) {
            echo "<h3>". substr($_GET['page'], 0, -4)."</h3>";
          }?>
        </div>
        <div class="card-body p-4">
        <ul class="nav nav-tabs bg-body" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Preview</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="code-tab" data-bs-toggle="tab" data-bs-target="#code-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Source Code</button>
          </li>
        </ul>
        <div class="tab-content mt-4" id="myTabContent">
        <div style="min-height:100%;" class="tab-pane fade show overflow-y-scroll overflow-x-scroll active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
          <div class="card">
          <div class="card-body">
            <?php 
                if (isset($_GET['page'])) {
                  $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                  if (file_exists('tugas/'.$page)) {
                    include('tugas/'.$page);
                  } else {
                    header("HTTP/1.0 404 Not Found");
                    echo "Page not found.";
                  }
                } else {
                  echo "Klik salah satu tugas pada sidebar untuk melihat hasil dan preview kode";
                }
              ?>
          </div>
          </div>
          
        </div>
        <div class="tab-pane fade overflow-y-scroll overflow-x-scroll" id="code-tab-pane" role="tabpanel" aria-labelledby="code-tab" tabindex="0">
        <div class="card">
          <div class="card-body">
            <?php 
                if (isset($_GET['page'])) {
                  $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                  if (file_exists('tugas/'. $page)) {
                      highlight_file('tugas/'. $page);
                  } else {
                    header("HTTP/1.0 404 Not Found");
                    echo "Page not found.";
                  }
                } else {
                  echo "Klik salah satu tugas pada sidebar untuk melihat hasil dan preview kode";
                }
                ?>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
   
    <script src="asset/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
