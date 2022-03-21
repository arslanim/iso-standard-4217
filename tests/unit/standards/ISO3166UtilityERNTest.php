<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityERNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityERNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Eritrean nakfa';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ERN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '232';

    public function testERN(): void
    {
        $currency = ISO4217::ERN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityERN(): void
    {
        $currency = (new ISO4217Utility())->ERN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ERN(), (new ISO4217Utility())->ERN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
