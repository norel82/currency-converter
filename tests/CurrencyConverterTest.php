<?php

namespace App\Tests;

use App\CurrencyConverter;
use PHPUnit\Framework\TestCase;

class CurrencyConverterTest extends TestCase
{
    public function testConvert()
    {
        $rates = [
            'EUR' => 1.0,
            'USD' => 1.2,
            'GBP' => 0.85,
        ];

        $converter = new CurrencyConverter($rates);

        $this->assertEquals(120, $converter->convert(100, 'EUR', 'USD'));
        $this->assertEquals(85, $converter->convert(100, 'EUR', 'GBP'));
        $this->assertEquals(100, $converter->convert(120, 'USD', 'EUR'));
    }

    public function testConvertWithUnknownCurrency()
    {
        $this->expectException(\InvalidArgumentException::class);

        $converter = new CurrencyConverter(['EUR' => 1.0]);
        $converter->convert(100, 'EUR', 'XYZ'); // XYZ n'existe pas
    }
}
