<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAEDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAEDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'United Arab Emirates dirham';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AED';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '784';

    public function testAED(): void
    {
        $currency = ISO4217::AED();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityAED(): void
    {
        $currency = (new ISO4217Utility())->AED();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AED(), (new ISO4217Utility())->AED());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
