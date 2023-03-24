<div class="card p-4" id="latihan2">
    <?php 
    if(isset($_POST['a1']) && isset($_POST['b1'])){
        $a1 = $_POST['a1'];
        $b1 = $_POST['b1'];
        function jumlah($a1, $b1){
            $jumlah = $a1 + $b1;
            return $jumlah;
        }
        function kurang($a1, $b1){
            $jumlah = $a1 - $b1;
            return $jumlah;
        }
        function kali($a1, $b1){
            $jumlah = $a1 * $b1;
            return $jumlah;
        }
        function bagi($a1, $b1){
            $jumlah = $a1 / $b1;
            return $jumlah;
        }
    }
    ?>
    <h4>latihan 2</h4>
    <p>Input</p>
    <form action="" method="post">
        <div class="form-group row mt-2">
            <label class="col-md-4 col-sm-12" for="a1">Masukkan Bilangan Pertama:</label>
            <div class="col-md-8 col-sm-12">
                <input class="form-control" type="text" name="a1" size="10" required>
            </div>
        </div>
        <div class="form-group row mt-2">
            <label class="col-md-4 col-sm-12"for="b1">Masukkan Bilangan Kedua:</label>
            <div class="col-md-8 col-sm-12">
                <input class="form-control" type="text" name="b1" size="10" required>
            </div>
        </div>
        <button class="btn mt-4 btn-sm btn-success btn-block" type="submit" value="hitung">Hitung</button>
    </form>
    <p>Output</p>
    <div class="alert alert-info">
        <?php if (isset($_POST['a1']) && isset($_POST['b1'])) { ?>
            <p>Bilangan Pertama : <?= $a1?></p>
            <p>Bilangan Kedua : <?= $b1?></p>
            <hr>
            <?php $jumlahbil = jumlah($a1, $b1);?>
            <p>Hasil Penjumlahan 2 bilangan : </p>
            <p><?php printf("Penjumlahan Antara : %d + %d = %d", $a1, $b1, $jumlahbil)?></p>

            <?php $kurangbil = kurang($a1, $b1);?>
            <p>Hasil Pengurangan 2 bilangan : </p>
            <p><?php printf("Pengurangan Antara : %d - %d = %d", $a1, $b1, $kurangbil)?></p>

            <?php $kalibil = kali($a1, $b1);?>
            <p>Hasil Perkalian 2 bilangan : </p>
            <p><?php printf("Perkalian Antara : %d * %d = %d", $a1, $b1, $kalibil)?></p>

            <?php $bagibil = bagi($a1, $b1);?>
            <p>Hasil Pembagian 2 bilangan : </p>
            <p><?php printf("Pembagian Antara : %d / %d = %d", $a1, $b1, $bagibil)?></p>
        <?php }?>
    </div>
</div>