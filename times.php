<?php
parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $params);
$n = $params['n'];

echo $n

for ($i = 1; $i <= 15; $i++) {
    echo "$i x $n = " . ($i * $n) . "<br>";
}
?>