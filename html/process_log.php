<?php
$fpath = './transactions.csv';
$total_revenue = 0.0;
$customer_spending = [];

if (($f = fopen($fpath, 'r')) !== FALSE) {
    fgetcsv($f, escape: '');
    while(($data = fgetcsv($f, escape: '')) !== FALSE) {
        $customer_id = $data[1];
        $amount = (float)$data[2];
        $total_revenue += $amount;

        if(!isset($customer_spending[$customer_id])) {
            $customer_spending[$customer_id] = 0;
        }
        $customer_spending[$customer_id] += $amount;
    }
    fclose($f);
    arsort($customer_spending);
    $top_5_customers = array_slice($customer_spending, 0, 5, true);

    echo '<h1>Transaction Analysis Report</h1>';
    echo '<h2>Total revenue: $' .number_format($total_revenue, 2) . '</h2>';
    echo '<h2>Top 5 Customers by Expending:</h2>';
    echo '<ol>';
    foreach ($top_5_customers as $id => $total) {
        $formated_total = number_format($total, 2);
        echo "<li>Customer ID #{$id}: $formated_total</li>";
    }
    echo '</ol>';
} else {
    die("Error: could not open the file");
}
?>
