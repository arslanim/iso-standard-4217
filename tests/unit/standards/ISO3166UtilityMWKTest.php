<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMWKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMWKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Malawian kwacha';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MWK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '454';

    public function testMWK(): void
    {
        $currency = ISO4217::MWK();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMWK(): void
    {
        $currency = (new ISO4217Utility())->MWK();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MWK(), (new ISO4217Utility())->MWK());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
