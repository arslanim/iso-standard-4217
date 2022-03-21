<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTRYTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityTRYTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Turkish lira';
    private const EXPECTED_CURRENCY_ALPHA3 = 'TRY';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '949';

    public function testTRY(): void
    {
        $currency = ISO4217::TRY();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityTRY(): void
    {
        $currency = (new ISO4217Utility())->TRY();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::TRY(), (new ISO4217Utility())->TRY());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
