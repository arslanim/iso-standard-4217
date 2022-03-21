<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAFNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAFNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Afghan afghani';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AFN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '971';

    public function testAFN(): void
    {
        $currency = ISO4217::AFN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityAFN(): void
    {
        $currency = (new ISO4217Utility())->AFN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AFN(), (new ISO4217Utility())->AFN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
