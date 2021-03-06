<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXBDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXBDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'European Unit of Account 17 (E.U.A.-17) (bond market unit)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XBD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '958';

    public function testXBD(): void
    {
        $currency = ISO4217::XBD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXBD(): void
    {
        $currency = (new ISO4217Utility())->XBD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XBD(), (new ISO4217Utility())->XBD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
