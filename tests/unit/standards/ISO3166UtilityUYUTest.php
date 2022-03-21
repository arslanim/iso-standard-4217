<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUYUTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUYUTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Uruguayan peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UYU';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '858';

    public function testUYU(): void
    {
        $currency = ISO4217::UYU();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUYU(): void
    {
        $currency = (new ISO4217Utility())->UYU();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UYU(), (new ISO4217Utility())->UYU());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
