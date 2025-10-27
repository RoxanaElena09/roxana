<?php
declare(strict_types=1);

namespace App;

final class Math
{
    public function add(float|int $a, float|int $b): float
    {
        return $a + $b;
    }

    public function sub(float|int $a, float|int $b): float
    {
        return $a - $b;
    }

    public function mul(float|int $a, float|int $b): float
    {
        return $a * $b;
    }

    public function div(float|int $a, float|int $b): float
    {
        if ($b == 0.0) {
            throw new \InvalidArgumentException('Division by zero');
        }

        return $a / $b;
    }
}

