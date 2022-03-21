<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityWSTTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityWSTTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Samoan tala';
    private const EXPECTED_CURRENCY_ALPHA3 = 'WST';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '882';

    public function testWST(): void
    {
        $currency = ISO4217::WST();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityWST(): void
    {
        $currency = (new ISO4217Utility())->WST();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::WST(), (new ISO4217Utility())->WST());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
