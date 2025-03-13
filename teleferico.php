<?php
$C = 10;
$A = 20;
$R = 0;
while ($A > 0) {
    $R += 1;
    if ($C <= $A) {
        $A -= ($C - 1);
    } else {
        $A = 0;
    }
}
echo $R;
