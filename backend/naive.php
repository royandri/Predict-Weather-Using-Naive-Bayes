<?php

$temp = "SELECT (SELECT AVG(temperatur) FROM tbl_dataset WHERE prediksi_cuaca = 'Hujan') AS Hujan, (SELECT AVG(temperatur) FROM tbl_dataset WHERE prediksi_cuaca = 'Berawan') AS Berawan, (SELECT AVG(temperatur) FROM tbl_dataset WHERE prediksi_cuaca = 'Cerah') AS Cerah";
$meanTemp = mysqli_query($koneksi, $temp);

?>