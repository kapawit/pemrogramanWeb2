<div class="card p-4">
<h4>PERTEMUAN 14 - TRANSAKSI DAN RELASI DALAM DATABASE</h4>

<?php 
include("pertemuan_14/form.php");
?>
</div>

  <div class="card p-4 mt-4">
  <h4>Latihan Soal</h4>
<?php
    $dir = "tugas/pertemuan14_latihansoal";
    $files = scandir($dir);
?>
<?php foreach($files as $file) {
    if(substr($file, -4) === ".php") {
        if (isset($_GET['page'])) {
          $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
        }
      ?>
        <a class="list-group-item hvr-forward list-group-item-action" href="<?php echo 'tugas/pertemuan14_latihansoal/' . $file; ?>">
          <span class="d-flex justify-content-between">
            <?php echo $file; ?>
            <i class="bi bi-arrow-right"></i>
          </span>
        </a>
        <?php } ?>
    <?php } ?>
  </div>
