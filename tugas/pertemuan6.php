<?php
if (!isset($_SESSION['myArray'])) {
    $_SESSION['myArray'] = array();
  }
  
  if (isset($_POST['save-array'])) {
    $inputArray = explode(',', $_POST['input-array']);
    $_SESSION['myArray'] = $inputArray;
  }
  
  if (isset($_POST['add-item'])) {
    $newItem = $_POST['new-item'];
    array_push($_SESSION['myArray'], $newItem);
  }
  if (isset($_POST['del-item'])) {
    $del = $_POST['del-index'];
    unset($_SESSION['myArray'][$del]);
  }
?>

    <div class="my-4"> 
        <h4>Tugas 1 - Program Array</h4>
        <hr>
        <div class="alert alert-info">
            <?php 
            if ($_SESSION['myArray'] != null) {
                echo "<pre>";
                print_r($_SESSION['myArray']);
                echo "</pre>";
            } else {
                echo "array kosong";
            }
            ?>
        </div>
        <div class="d-flex justify-content-between">
        <form action="" method="post">
                <label for="input-array">Masukkan data :</label><br>
                <input type="text" id="input-array" name="input-array" placeholder="A,B,C,D" required>
                <button class="btn btn-sm btn-primary btn-block" type="submit" name="save-array">Simpan</button>
        </form>
    
        <form action="" method="post">
            <label for="new-item">Tambahkan Data:</label><br>
            <input type="text" id="new-item" name="new-item" required>
            <button class="btn btn-sm btn-success btn-block" type="submit" name="add-item">Tambah</button>
        </form>

        <form action="" method="post">
            <label for="new-item">hapus Data:</label><br>
            <input type="text" id="del-index" name="del-index" required>
            <button class="btn btn-sm btn-danger btn-block" type="submit" name="del-item">Hapus</button>
        </form>
        </div>
    <hr>
</div>
<div class="my-4">
    <h4>Tugas 2 - Program Array 2 Dimensi</h4>
</div>
