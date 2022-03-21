<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBGNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBGNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bulgarian lev';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BGN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '975';

    public function testBGN(): void
    {
        $currency = ISO4217::BGN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityBGN(): void
    {
        $currency = (new ISO4217Utility())->BGN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BGN(), (new ISO4217Utility())->BGN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
