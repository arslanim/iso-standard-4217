<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySARTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySARTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Saudi riyal';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SAR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '682';

    public function testSAR(): void
    {
        $currency = ISO4217::SAR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilitySAR(): void
    {
        $currency = (new ISO4217Utility())->SAR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SAR(), (new ISO4217Utility())->SAR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
