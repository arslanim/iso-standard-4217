<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityANGTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityANGTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Netherlands Antillean guilder';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ANG';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '532';

    public function testANG(): void
    {
        $currency = ISO4217::ANG();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityANG(): void
    {
        $currency = (new ISO4217Utility())->ANG();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ANG(), (new ISO4217Utility())->ANG());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
