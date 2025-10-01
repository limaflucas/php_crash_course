<?php

function random_float($min, $max) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

$file = fopen('transactions.csv', 'w');
fputcsv($file, ['transaction_id', 'customer_id', 'amount', 'date'], escape:'');
for ($i = 0; $i < 10000; $i++) {
    $transaction = [
        $i,
        rand(1, 50),
        random_float(10.00, 1000000),
        date('Y-m-d')
    ];
    fputcsv($file, $transaction,escape:'');
}
fclose($file);
echo 'transactions.csv with 10,000 records has been created successfully!';
?>
