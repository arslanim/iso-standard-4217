<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityRONTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityRONTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Romanian leu';
    private const EXPECTED_CURRENCY_ALPHA3 = 'RON';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '946';

    public function testRON(): void
    {
        $currency = ISO4217::RON();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityRON(): void
    {
        $currency = (new ISO4217Utility())->RON();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::RON(), (new ISO4217Utility())->RON());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
