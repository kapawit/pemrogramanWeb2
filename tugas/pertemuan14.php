<div class="card p-4">
<h4>PERTEMUAN 14 - TRANSAKSI DAN RELASI DALAM DATABASE</h4>

<?php 
include("pertemuan_14/form.php");
?>
</div>

  <div class="card p-4 mt-4">
  <h4>Latihan Soal</h4>
<hr>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body table-responsive">
      <h4>Tabel jenis Room</h4>
      <?php
        include("pertemuan14_latihansoal/getroom.php");
      ?>
      </div>
    </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body table-responsive">
          <h4>Tabel Booking hotel</h4>
          <?php
            include("pertemuan14_latihansoal/getbooking.php");
          ?>
        </div>
      </div>
    </div>
  </div>
<div class="col-12 mt-4">
  <h4>
    Form Booking Room
  </h4>
<?php
  include("pertemuan14_latihansoal/bookingform.php");
?>
</div>
  </div>
