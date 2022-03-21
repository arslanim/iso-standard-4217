<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityALLTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityALLTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Albanian lek';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ALL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '008';

    public function testALL(): void
    {
        $currency = ISO4217::ALL();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityALL(): void
    {
        $currency = (new ISO4217Utility())->ALL();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ALL(), (new ISO4217Utility())->ALL());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
