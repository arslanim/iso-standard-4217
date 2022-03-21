<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityVNDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityVNDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Vietnamese Äá»ng';
    private const EXPECTED_CURRENCY_ALPHA3 = 'VND';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '704';

    public function testVND(): void
    {
        $currency = ISO4217::VND();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityVND(): void
    {
        $currency = (new ISO4217Utility())->VND();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::VND(), (new ISO4217Utility())->VND());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
