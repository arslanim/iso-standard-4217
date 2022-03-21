<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTMTTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityTMTTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Turkmenistan manat';
    private const EXPECTED_CURRENCY_ALPHA3 = 'TMT';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '934';

    public function testTMT(): void
    {
        $currency = ISO4217::TMT();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityTMT(): void
    {
        $currency = (new ISO4217Utility())->TMT();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::TMT(), (new ISO4217Utility())->TMT());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
