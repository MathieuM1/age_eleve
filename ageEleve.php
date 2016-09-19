<?php
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$total='';

foreach ($students as $keys => $value) {
  $total += $value;
  echo $keys. ' : ' .$value. ' ans<br/>';
}

$moyenne = $total/5;
echo "La moyenne des élèves est de " .$moyenne. " ans";

?>
