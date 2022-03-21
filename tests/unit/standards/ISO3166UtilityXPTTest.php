<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXPTTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXPTTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Platinum (one troy ounce)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XPT';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '962';

    public function testXPT(): void
    {
        $currency = ISO4217::XPT();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXPT(): void
    {
        $currency = (new ISO4217Utility())->XPT();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XPT(), (new ISO4217Utility())->XPT());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
