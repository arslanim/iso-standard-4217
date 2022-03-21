<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBZDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBZDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Belize dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BZD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '084';

    public function testBZD(): void
    {
        $currency = ISO4217::BZD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityBZD(): void
    {
        $currency = (new ISO4217Utility())->BZD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BZD(), (new ISO4217Utility())->BZD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
