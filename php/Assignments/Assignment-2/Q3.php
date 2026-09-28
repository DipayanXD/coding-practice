<?php

$s = [88,45,95,72,60,91];

$a = $s;
sort($a);
echo "sort(): "; print_r($a);

echo "<br>";

$a = $s;
rsort($a);
echo "rsort(): "; print_r($a);

echo "<br>";

$p = ["Mouse"=>549,"Keyboard"=>899,"Cable"=>149,"Bag"=>799,"Webcam"=>1299];

$a = $p;
asort($a);
echo "asort(): "; print_r($a);

echo "<br>";

$a = $p;
ksort($a);
echo "ksort(): "; print_r($a);

?>