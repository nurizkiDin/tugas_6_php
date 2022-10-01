<?php
echo "Seorang pedagang menjual jambu dengan harga Rp 15.000/kg. 
Di dalam tokonya terdapat 6 dus dan di setiap dus berisi 5 kg jambu. 
Dua bekas tempat jambu itu masih bisa dijual lagi dengan harga Rp 2.000/dus. 
Berapakah uang hasil penjualan seluruh jambu dan dus tersebut?";
echo "<br/>=======================";
$jambu = 15000;
$kardus = 2000;
$total = 6*(($jambu*5)+$kardus);
echo "<br/>Harga Jambu = Rp ".$jambu." /Kg";
echo "<br/>Harga Kardus = Rp ".$kardus." /pcs";
echo "<br/>Total Penjualan (Kardus dan Jambu) = Rp ".$total;
echo "<br/>=======================";
?>