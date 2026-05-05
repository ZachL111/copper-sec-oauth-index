<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(60, 107, 13, 21, 10);
assert(Policy::score($signal_case_1) === 141);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(63, 71, 16, 8, 6);
assert(Policy::score($signal_case_2) === 131);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(87, 77, 10, 16, 8);
assert(Policy::score($signal_case_3) === 187);
assert(Policy::classify($signal_case_3) === "accept");
