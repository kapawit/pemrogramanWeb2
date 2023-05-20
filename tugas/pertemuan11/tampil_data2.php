<?php
$con=mysqli_connect("localhost","pemrograman","LASJD*ASDUOIYO qoyiwyioOIASHDO OIH", "db_latihan11");
$hasil=mysqli_query($con, "select * from tbl_mhs");
While($data=mysqli_fetch_array($hasil))
{
echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>
