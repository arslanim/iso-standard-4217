<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCOUTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCOUTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Unidad de Valor Real (UVR) (funds code)[9]';
    private const EXPECTED_CURRENCY_ALPHA3 = 'COU';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '970';

    public function testCOU(): void
    {
        $currency = ISO4217::COU();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityCOU(): void
    {
        $currency = (new ISO4217Utility())->COU();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::COU(), (new ISO4217Utility())->COU());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
