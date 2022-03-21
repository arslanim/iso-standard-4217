<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySLLTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySLLTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Sierra Leonean leone';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SLL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '694';

    public function testSLL(): void
    {
        $currency = ISO4217::SLL();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilitySLL(): void
    {
        $currency = (new ISO4217Utility())->SLL();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SLL(), (new ISO4217Utility())->SLL());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
