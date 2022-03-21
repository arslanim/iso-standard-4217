<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXBBTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXBBTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'European Monetary Unit (E.M.U.-6) (bond market unit)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XBB';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '956';

    public function testXBB(): void
    {
        $currency = ISO4217::XBB();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXBB(): void
    {
        $currency = (new ISO4217Utility())->XBB();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XBB(), (new ISO4217Utility())->XBB());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
