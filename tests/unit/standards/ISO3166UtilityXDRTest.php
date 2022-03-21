<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXDRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXDRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Special drawing rights';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XDR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '960';

    public function testXDR(): void
    {
        $currency = ISO4217::XDR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXDR(): void
    {
        $currency = (new ISO4217Utility())->XDR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XDR(), (new ISO4217Utility())->XDR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
