<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUSDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUSDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'United States dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'USD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '840';

    public function testUSD(): void
    {
        $currency = ISO4217::USD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUSD(): void
    {
        $currency = (new ISO4217Utility())->USD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::USD(), (new ISO4217Utility())->USD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
