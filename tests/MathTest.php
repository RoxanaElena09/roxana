<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Math;

final class MathTest extends TestCase
{
    private Math $m;

    protected function setUp(): void { $this->m = new Math(); }

    public function testAdd(): void { $this->assertSame(5.0, $this->m->add(2, 3)); }
    public function testSub(): void { $this->assertSame(-1.0, $this->m->sub(2, 3)); }
    public function testMul(): void { $this->assertSame(6.0, $this->m->mul(2, 3)); }
    public function testDiv(): void { $this->assertSame(2.0, $this->m->div(6, 3)); }

    public function testDivByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->m->div(1, 0);
    }
}
