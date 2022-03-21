<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityRSDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityRSDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Serbian dinar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'RSD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '941';

    public function testRSD(): void
    {
        $currency = ISO4217::RSD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityRSD(): void
    {
        $currency = (new ISO4217Utility())->RSD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::RSD(), (new ISO4217Utility())->RSD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
