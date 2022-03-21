<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityHRKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityHRKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Croatian kuna';
    private const EXPECTED_CURRENCY_ALPHA3 = 'HRK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '191';

    public function testHRK(): void
    {
        $currency = ISO4217::HRK();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityHRK(): void
    {
        $currency = (new ISO4217Utility())->HRK();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::HRK(), (new ISO4217Utility())->HRK());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
