<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUYITest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUYITest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UYI';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '940';

    public function testUYI(): void
    {
        $currency = ISO4217::UYI();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUYI(): void
    {
        $currency = (new ISO4217Utility())->UYI();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UYI(), (new ISO4217Utility())->UYI());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
