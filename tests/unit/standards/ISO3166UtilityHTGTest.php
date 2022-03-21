<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityHTGTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityHTGTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Haitian gourde';
    private const EXPECTED_CURRENCY_ALPHA3 = 'HTG';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '332';

    public function testHTG(): void
    {
        $currency = ISO4217::HTG();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityHTG(): void
    {
        $currency = (new ISO4217Utility())->HTG();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::HTG(), (new ISO4217Utility())->HTG());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
