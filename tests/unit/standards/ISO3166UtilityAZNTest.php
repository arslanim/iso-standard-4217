<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAZNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAZNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Azerbaijani manat';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AZN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '944';

    public function testAZN(): void
    {
        $currency = ISO4217::AZN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityAZN(): void
    {
        $currency = (new ISO4217Utility())->AZN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AZN(), (new ISO4217Utility())->AZN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
