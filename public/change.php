<?php

$a=10;
$b=20;
echo "原值a=".$a."原值b=".$b;
echo "<br>";
//$c=$a;
//$a=$b;
//$b=$c;
list ( $a, $b ) = array ($b, $a );
echo "交换后a=".$a."交换后b=".$b;