<?php
header('Content-Type: application/json');

$n = $_GET['n'];
$n = intval($n);

$fibonacci = [];
$a = 0;
$b = 1;

for ($i = 0; $i < $n; $i++) {
    $fibonacci[] = $a;
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

echo json_encode(["data" => $fibonacci]);
?>
