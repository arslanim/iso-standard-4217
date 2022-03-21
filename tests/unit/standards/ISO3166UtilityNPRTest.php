<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNPRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNPRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Nepalese rupee';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NPR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '524';

    public function testNPR(): void
    {
        $currency = ISO4217::NPR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityNPR(): void
    {
        $currency = (new ISO4217Utility())->NPR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NPR(), (new ISO4217Utility())->NPR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
