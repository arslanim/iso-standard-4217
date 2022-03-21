<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCOPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCOPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Colombian peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'COP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '170';

    public function testCOP(): void
    {
        $currency = ISO4217::COP();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityCOP(): void
    {
        $currency = (new ISO4217Utility())->COP();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::COP(), (new ISO4217Utility())->COP());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
