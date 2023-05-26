<div class="card p-4">
<h4>PERTEMUAN 13 - MANIPULASI DATABASE SEARCHING DAN SORTING</h4>
<?php
    $dir = "tugas/pertemuan_13";
    $files = scandir($dir);
?>
<?php foreach($files as $file) {
    if(substr($file, -4) === ".php") {
        if (isset($_GET['page'])) {
          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        }
      ?>
        <a class="list-group-item hvr-forward list-group-item-action" href="<?php echo 'tugas/pertemuan_13/' . $file; ?>">
          <span class="d-flex justify-content-between">
            <?php echo $file; ?>
            <i class="bi bi-arrow-right"></i>
          </span>
        </a>
        <?php } ?>
    <?php } ?>
  </div>

  <div class="card p-4 mt-4">
  <h4>Latihan Soal</h4>
<?php
    $dir = "tugas/pertemuan13_latihansoal";
    $files = scandir($dir);
?>
<?php foreach($files as $file) {
    if(substr($file, -4) === ".php") {
        if (isset($_GET['page'])) {
          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        }
      ?>
        <a class="list-group-item hvr-forward list-group-item-action" href="<?php echo 'tugas/pertemuan13_latihansoal/' . $file; ?>">
          <span class="d-flex justify-content-between">
            <?php echo $file; ?>
            <i class="bi bi-arrow-right"></i>
          </span>
        </a>
        <?php } ?>
    <?php } ?>
  </div>
</div>