<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCUCTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCUCTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Cuban convertible peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CUC';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '931';

    public function testCUC(): void
    {
        $currency = ISO4217::CUC();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityCUC(): void
    {
        $currency = (new ISO4217Utility())->CUC();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CUC(), (new ISO4217Utility())->CUC());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
