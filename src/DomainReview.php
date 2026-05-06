<?php
declare(strict_types=1);

namespace Portfolio;

final class DomainReview
{
    public function __construct(
        public int $signal,
        public int $slack,
        public int $drag,
        public int $confidence
    ) {}
}

final class DomainReviewLens
{
    public static function score(DomainReview $item): int
    {
        return $item->signal * 2 + $item->slack + $item->confidence - $item->drag * 3;
    }

    public static function lane(DomainReview $item): string
    {
        $value = self::score($item);
        return $value >= 140 ? "ship" : ($value >= 105 ? "watch" : "hold");
    }
}
