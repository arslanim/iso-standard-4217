<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGYDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGYDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Guyanese dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GYD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '328';

    public function testGYD(): void
    {
        $currency = ISO4217::GYD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityGYD(): void
    {
        $currency = (new ISO4217Utility())->GYD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GYD(), (new ISO4217Utility())->GYD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
