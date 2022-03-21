<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCNYTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCNYTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Chinese yuan[8]';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CNY';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '156';

    public function testCNY(): void
    {
        $currency = ISO4217::CNY();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityCNY(): void
    {
        $currency = (new ISO4217Utility())->CNY();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CNY(), (new ISO4217Utility())->CNY());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
