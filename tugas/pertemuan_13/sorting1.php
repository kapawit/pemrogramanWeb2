<?php
$koneksi=mysqli_connect("localhost","root","","db_latihan13");
$hasil=mysqli_query($koneksi, "select * from customer order by customernumber desc "); 

echo

"
<table>
<tr>
<th>customerNumber</th>
<th>customerName</th>
<th>phone</th>
<th>addressLine1</th>
<th>city</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo "<tr>
<td>".$data['customernumber']."</td>
<td>".$data['customername']."</td>
<td>".$data['phone']."</td>
<td>".$data['addressline1']."</td>
<td>".$data['city']."</td>
</tr>
</body>
</html>";
}
?>
