<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityJPYTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityJPYTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Japanese yen';
    private const EXPECTED_CURRENCY_ALPHA3 = 'JPY';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '392';

    public function testJPY(): void
    {
        $currency = ISO4217::JPY();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityJPY(): void
    {
        $currency = (new ISO4217Utility())->JPY();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::JPY(), (new ISO4217Utility())->JPY());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
