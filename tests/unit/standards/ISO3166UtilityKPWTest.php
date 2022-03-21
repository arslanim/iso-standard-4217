<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKPWTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKPWTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'North Korean won';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KPW';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '408';

    public function testKPW(): void
    {
        $currency = ISO4217::KPW();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityKPW(): void
    {
        $currency = (new ISO4217Utility())->KPW();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KPW(), (new ISO4217Utility())->KPW());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
