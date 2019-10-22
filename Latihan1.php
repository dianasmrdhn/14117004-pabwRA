<?php
function balik(&$angka1,&$angka2){
    $temp=$angka1;
    $angka1=$angka2;
    $angka2=$temp;
}
$x = 1;
$y = 2;
echo "$x <br> ";
echo $y;
echo "</br>";
echo "</br>";
balik($x,$y);
echo "$x <br>";
echo $y;
?>