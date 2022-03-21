<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUAHTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUAHTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Ukrainian hryvnia';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UAH';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '980';

    public function testUAH(): void
    {
        $currency = ISO4217::UAH();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUAH(): void
    {
        $currency = (new ISO4217Utility())->UAH();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UAH(), (new ISO4217Utility())->UAH());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
