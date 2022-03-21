<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityIRRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityIRRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Iranian rial';
    private const EXPECTED_CURRENCY_ALPHA3 = 'IRR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '364';

    public function testIRR(): void
    {
        $currency = ISO4217::IRR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityIRR(): void
    {
        $currency = (new ISO4217Utility())->IRR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::IRR(), (new ISO4217Utility())->IRR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
