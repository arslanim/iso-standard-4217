<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityLKRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityLKRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Sri Lankan rupee';
    private const EXPECTED_CURRENCY_ALPHA3 = 'LKR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '144';

    public function testLKR(): void
    {
        $currency = ISO4217::LKR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityLKR(): void
    {
        $currency = (new ISO4217Utility())->LKR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::LKR(), (new ISO4217Utility())->LKR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
