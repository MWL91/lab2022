<?php

$min = (int) ($_GET['min'] ?? 0);
$max = (int) ($_GET['max'] ?? 100);

echo rand($min, $max);
