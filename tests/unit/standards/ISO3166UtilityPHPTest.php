<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityPHPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityPHPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Philippine peso[13]';
    private const EXPECTED_CURRENCY_ALPHA3 = 'PHP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '608';

    public function testPHP(): void
    {
        $currency = ISO4217::PHP();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityPHP(): void
    {
        $currency = (new ISO4217Utility())->PHP();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::PHP(), (new ISO4217Utility())->PHP());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
