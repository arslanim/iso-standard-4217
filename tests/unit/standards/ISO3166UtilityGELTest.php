<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGELTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGELTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Georgian lari';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GEL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '981';

    public function testGEL(): void
    {
        $currency = ISO4217::GEL();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityGEL(): void
    {
        $currency = (new ISO4217Utility())->GEL();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GEL(), (new ISO4217Utility())->GEL());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
