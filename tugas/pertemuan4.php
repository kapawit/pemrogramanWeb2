<?php

for ($i=0; $i < 30 ; $i++) { 
  echo "Saya berjanji tidak akan main slot lagi <br>";
}

for ($i=1 ; $i <= 10 ; $i++) { 
  echo "Perulangan ke {$i} <br>";
}

for ($i=1 ; $i <= 30 ; $i++) { 
  echo "Angka - {$i} <br>";
}

for ($i=30 ; $i >= 0 ; $i--) { 
  echo "Angka - {$i} <br>";
}

for ($i=0  ; $i <= 5 ; $i++) { 
    for ($j=0; $j <= 5 ; $j++) { 
        echo "* ";
    }
    echo "<br>";
}

for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < 5 - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

for($i = 0; $i < 5; $i++) {
    for($j = 0; $j < 5 - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

$i = 0;
while ($i < 5) {
    echo "Perulangan While ke- {$i} <br>";
    $i++;
}

echo "Tabel Perkalian <br>";
$angka = 12;
    for ($i = 15; $i <= 40; $i += 2 ) { 
        echo $angka . " x " . $i ." = " . $angka * $i . "<br>";
    }
?>