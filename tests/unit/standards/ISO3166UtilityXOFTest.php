<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXOFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXOFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'CFA franc BCEAO';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XOF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '952';

    public function testXOF(): void
    {
        $currency = ISO4217::XOF();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityXOF(): void
    {
        $currency = (new ISO4217Utility())->XOF();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XOF(), (new ISO4217Utility())->XOF());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
