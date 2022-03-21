<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityEURTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityEURTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Euro';
    private const EXPECTED_CURRENCY_ALPHA3 = 'EUR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '978';

    public function testEUR(): void
    {
        $currency = ISO4217::EUR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityEUR(): void
    {
        $currency = (new ISO4217Utility())->EUR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::EUR(), (new ISO4217Utility())->EUR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
