<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMOPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMOPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Macanese pataca';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MOP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '446';

    public function testMOP(): void
    {
        $currency = ISO4217::MOP();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMOP(): void
    {
        $currency = (new ISO4217Utility())->MOP();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MOP(), (new ISO4217Utility())->MOP());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
