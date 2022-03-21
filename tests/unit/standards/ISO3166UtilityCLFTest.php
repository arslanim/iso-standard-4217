<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCLFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCLFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Unidad de Fomento (funds code)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CLF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '990';

    public function testCLF(): void
    {
        $currency = ISO4217::CLF();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityCLF(): void
    {
        $currency = (new ISO4217Utility())->CLF();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CLF(), (new ISO4217Utility())->CLF());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
