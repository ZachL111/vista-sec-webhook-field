<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(50, 49, 19, 58);
assert(DomainReviewLens::score($item) === 150);
assert(DomainReviewLens::lane($item) === "ship");
