<?php
declare(strict_types=1);

namespace Portfolio;

final class Signal
{
    public function __construct(
        public int $demand,
        public int $capacity,
        public int $latency,
        public int $risk,
        public int $weight
    ) {}
}

final class Policy
{
    private const THRESHOLD = 159;
    private const RISK_PENALTY = 4;
    private const LATENCY_PENALTY = 4;
    private const WEIGHT_BONUS = 5;

    public static function score(Signal $signal): int
    {
        return $signal->demand * 2 + $signal->capacity + $signal->weight * self::WEIGHT_BONUS
            - $signal->latency * self::LATENCY_PENALTY - $signal->risk * self::RISK_PENALTY;
    }

    public static function classify(Signal $signal): string
    {
        return self::score($signal) >= self::THRESHOLD ? "accept" : "review";
    }
}
