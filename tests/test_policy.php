<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(88, 89, 21, 20, 5);
assert(Policy::score($signal_case_1) === 126);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(83, 71, 18, 9, 10);
assert(Policy::score($signal_case_2) === 179);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(105, 76, 10, 5, 9);
assert(Policy::score($signal_case_3) === 271);
assert(Policy::classify($signal_case_3) === "accept");
