<?php
$con1 = mysqli_connect("localhost","pemrograman","LASJD*ASDUOIYO qoyiwyioOIASHDO OIH","db_latihan11"); 
if (!$con1){
    die('Could not connect: ' . mysqli_error($con1));
}
mysqli_query($con1,"UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"); 
mysqli_close($con1);
?>