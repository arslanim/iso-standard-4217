<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUGXTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUGXTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Ugandan shilling';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UGX';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '800';

    public function testUGX(): void
    {
        $currency = ISO4217::UGX();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUGX(): void
    {
        $currency = (new ISO4217Utility())->UGX();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UGX(), (new ISO4217Utility())->UGX());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
