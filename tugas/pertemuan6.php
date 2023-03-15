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
    // Tugas 2
    $cars = array (
        array("Ford","http://ford.co.id/wp-content/uploads/2022/05/wildtrack_saber.png"),
        array("Toyota","https://www.toyota.astra.co.id/sites/default/files/2023-02/corolla-cross-hybrid-gr_0.png"),
    );
    if (!isset($_SESSION['cars'])) {
        $_SESSION['cars'] = $cars;
    }
    if (isset($_POST['add-car'])) {
        $newcar = array($_POST['merk-car'], $_POST['foto-car']);
        array_push($_SESSION['cars'], $newcar);
    }
?>
<div class="my-4" id="Tugas1"> 
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
                <input type="text" id="input-array" name="input-array" placeholder="Ford,Esemka" required>
                <button class="btn btn-sm btn-primary btn-block" type="submit" name="save-array">Simpan</button>
        </form>
    
        <form action="" method="post">
            <label for="new-item">Tambahkan Data:</label><br>
            <input type="text" id="new-item" name="new-item" placeholder="volvo" required>
            <button class="btn btn-sm btn-success btn-block" type="submit" name="add-item">Tambah</button>
        </form>

        <form action="" method="post">
            <label for="new-item">hapus Data:</label><br>
            <input type="text" id="del-index" placeholder="0" name="del-index" required>
            <button class="btn btn-sm btn-danger btn-block" type="submit" name="del-item">Hapus</button>
        </form>
    </div>
</div>
    <hr>
<div class="my-4" id="Tugas2">
    <h4>Tugas 2 - Program Array 2 Dimensi</h4>
    <hr>
    <div class="alert alert-info">
        <?php 
        echo "<pre>";
        print_r($_SESSION['cars']);
        echo "</pre>";
        ?>
    </div>
    <div class="row">
        <?php for ($row = 0; $row < count($_SESSION['cars']); $row++) { ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center">
                            <img class="w-100 h-100" src="<?=  $_SESSION['cars'][$row][1]?>" alt="<?=  $_SESSION['cars'][$row][0]?>">
                            <span><?= $_SESSION['cars'][$row][0]?></span>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="mt-4">
        <h4>Tambah Mobil</h4>
        <form action="" method="post">
            <label for="new-item">Merk Mobil:</label><br>
            <input class="w-100" type="text" name="merk-car" placeholder="Merk" required>
            <label for="new-item">Foto Mobil:</label><br>
            <input class="w-100" type="text" name="foto-car" placeholder="Url Foto" required>
            <button class="btn mt-4 btn-sm btn-success btn-block" type="submit" name="add-car">Tambah</button>
        </form>
    </div>
</div>