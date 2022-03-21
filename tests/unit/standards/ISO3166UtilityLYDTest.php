<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityLYDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityLYDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Libyan dinar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'LYD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '434';

    public function testLYD(): void
    {
        $currency = ISO4217::LYD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityLYD(): void
    {
        $currency = (new ISO4217Utility())->LYD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::LYD(), (new ISO4217Utility())->LYD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
