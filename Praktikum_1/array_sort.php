<?php
$ar_buah = ["a" => "Pepaya", "b" => "Apel", "c" => "Mangga", "d" => "Jambu"];

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'asort($ar_buah';
asort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'ksort($ar_buah';
ksort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'arsort($ar_buah';
arsort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'krsort($ar_buah';
krsort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'sort($ar_buah';
sort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

echo 'rsort($ar_buah';
rsort($ar_buah);

echo '<ol>';
foreach ($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';