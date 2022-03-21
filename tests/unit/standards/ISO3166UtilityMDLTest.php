<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMDLTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMDLTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Moldovan leu';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MDL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '498';

    public function testMDL(): void
    {
        $currency = ISO4217::MDL();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMDL(): void
    {
        $currency = (new ISO4217Utility())->MDL();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MDL(), (new ISO4217Utility())->MDL());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
