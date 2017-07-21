<?php
$_50 = 0;
$_200 = 0;
$_20 = 0;


echo "Enter necessary amount of money: \n";
$handle = fopen("php://stdin","r");
$amount = fgets($handle);


function cash(&$amount, &$_200, &$_50, &$_20) {
    $_200 = intdiv($amount, 200);
    $amount -= $_200 * 200;
    if($amount > 100) {
        $_50 += 2;
        $amount -= 100;
    }
    $_20 = intdiv($amount, 20);
}

if(($amount % 10) || ($amount ==10) || ($amount == 30)){
    echo "no-no-no";
} elseif ($amount % 20) {
    $_50 = 1;
    $amount -= 50;
    //cash($amount, $_50, $_200, $_20);
    cash($amount, $_200, $_50, $_2);
} else cash($amount, $_200, $_50, $_2);

echo "You will have $_200 of 200, $_50 of 50, $_20 of 20\n";