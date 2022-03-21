<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityDOPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityDOPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Dominican peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'DOP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '214';

    public function testDOP(): void
    {
        $currency = ISO4217::DOP();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityDOP(): void
    {
        $currency = (new ISO4217Utility())->DOP();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::DOP(), (new ISO4217Utility())->DOP());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
