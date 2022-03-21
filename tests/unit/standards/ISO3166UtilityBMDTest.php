<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBMDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBMDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bermudian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BMD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '060';

    public function testBMD(): void
    {
        $currency = ISO4217::BMD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityBMD(): void
    {
        $currency = (new ISO4217Utility())->BMD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BMD(), (new ISO4217Utility())->BMD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
