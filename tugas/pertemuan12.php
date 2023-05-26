<div class="card p-4">
<h4>PERTEMUAN 12 - MANIPULASI DATABASE UPDATE DAN DELETE</h4>
<?php
    $dir = "tugas/pertemuan_12";
    $files = scandir($dir);
?>
<?php foreach($files as $file) {
    if(substr($file, -4) === ".php") {
        if (isset($_GET['page'])) {
          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        }
      ?>
        <a class="list-group-item hvr-forward list-group-item-action" href="<?php echo 'tugas/pertemuan_12/' . $file; ?>">
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
    $dir = "tugas/pertemuan12_latihansoal";
    $files = scandir($dir);
?>
<?php foreach($files as $file) {
    if(substr($file, -4) === ".php") {
        if (isset($_GET['page'])) {
          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        }
      ?>
        <a class="list-group-item hvr-forward list-group-item-action" href="<?php echo 'tugas/pertemuan12_latihansoal/' . $file; ?>">
          <span class="d-flex justify-content-between">
            <?php echo $file; ?>
            <i class="bi bi-arrow-right"></i>
          </span>
        </a>
        <?php } ?>
    <?php } ?>
  </div>
