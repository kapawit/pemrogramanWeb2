<?php
    $dir = "tugas/";
    $files = scandir($dir);
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
  <div class="row g-0 mt-4">
    <div class="col-md-3 col-sm-12 ">
      <div class="card mx-4 p-4 border bg-light-subtle">
        <h5>Daftar tugas </h5>
        <div class="list-group">
          <?php foreach($files as $file) {
              if(substr($file, -4) === ".php") {?>
                <?php 
                  if (isset($_GET['page'])) {
                    $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                  }
                ?>
                  <a class="list-group-item list-group-item-action <?php if ($page == $file) {
                    echo "active";
                  } ?>" href="<?php echo '?page=' . $file; ?>"><?php echo $file; ?></a>
                  <?php } ?>
              <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-12  vh-80">
      <div class="card mx-4 bg-light-subtle" id="my-card">
        <div class="card-body p-4">
        <ul class="nav nav-tabs bg-body" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Preview</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="code-tab" data-bs-toggle="tab" data-bs-target="#code-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Code</button>
          </li>
        </ul>
        <div class="tab-content mt-2" id="myTabContent">
        <div style="height:600px;min-height:100%;" class="tab-pane fade show overflow-y-scroll overflow-x-scroll active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
          <div class="card">
          <div class="card-body">
            <?php 
                if (isset($_GET['page'])) {
                  $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                  $filename = $page;
                  if (file_exists('tugas/'.$filename)) {
                    include('tugas/'.$filename);
                  } else {
                    header("HTTP/1.0 404 Not Found");
                    echo "Page not found.";
                  }
                } else {
                  include('default.php');
                }
              
              ?>
          </div>
          </div>
          
        </div>
        <div style="height:600px" class="tab-pane fade overflow-y-scroll overflow-x-scroll" id="code-tab-pane" role="tabpanel" aria-labelledby="code-tab" tabindex="0">
        <div class="card">
          <div class="card-body">
            <?php 
                  if (isset($_GET['page'])) {
                    $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                    $filename = $page;
                    if (file_exists('tugas/'.$filename)) {
                      highlight_file('tugas/'.$filename);
                    } else {
                      header("HTTP/1.0 404 Not Found");
                      echo "Page not found.";
                    }
                  } else {
                    include('default.php');
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
