<?php

define("host","localhost");
define("username","root");
define("password","");
define("dbName","db_naive");

$koneksi = mysqli_connect(host, username, password, dbName);

$con = new mysqli(host, username, password, dbName);

if(!$koneksi) echo "Koneksi error!";

?>