<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXAGTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXAGTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Silver (one troy ounce)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XAG';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '961';

    public function testXAG(): void
    {
        $currency = ISO4217::XAG();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXAG(): void
    {
        $currency = (new ISO4217Utility())->XAG();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XAG(), (new ISO4217Utility())->XAG());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
