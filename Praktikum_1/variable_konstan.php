<?php
define(constant_name:'PHI', value:3.14);
const DBNAME = 'inventory';
const DBSERVER = 'localhost';

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "luas lingkaran denga jari $jari : $luas";
echo "</br>kellilingnya : $kll";

echo 'Nama databasenya :' . DBNAME;
echo '</BR>Lokasi databasenya ada di :' . DBSERVER;

