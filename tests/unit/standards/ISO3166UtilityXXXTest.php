<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXXXTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXXXTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'No currency';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XXX';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '999';

    public function testXXX(): void
    {
        $currency = ISO4217::XXX();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXXX(): void
    {
        $currency = (new ISO4217Utility())->XXX();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XXX(), (new ISO4217Utility())->XXX());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
