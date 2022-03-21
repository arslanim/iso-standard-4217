<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityPLNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityPLNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Polish zÅoty';
    private const EXPECTED_CURRENCY_ALPHA3 = 'PLN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '985';

    public function testPLN(): void
    {
        $currency = ISO4217::PLN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityPLN(): void
    {
        $currency = (new ISO4217Utility())->PLN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::PLN(), (new ISO4217Utility())->PLN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
