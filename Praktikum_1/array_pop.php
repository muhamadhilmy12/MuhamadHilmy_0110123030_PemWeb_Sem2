<?php
$tims = ["erwin", "heru", "ali", "zaki"];

array_pop( $tims); // Mneghapus element terakhir di dalam array
foreach ($tims as $person) {
    echo $person . "</br>";
}