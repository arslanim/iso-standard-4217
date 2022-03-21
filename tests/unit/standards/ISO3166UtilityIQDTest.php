<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityIQDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityIQDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Iraqi dinar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'IQD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '368';

    public function testIQD(): void
    {
        $currency = ISO4217::IQD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityIQD(): void
    {
        $currency = (new ISO4217Utility())->IQD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::IQD(), (new ISO4217Utility())->IQD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
