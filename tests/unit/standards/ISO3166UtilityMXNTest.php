<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMXNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMXNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mexican peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MXN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '484';

    public function testMXN(): void
    {
        $currency = ISO4217::MXN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMXN(): void
    {
        $currency = (new ISO4217Utility())->MXN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MXN(), (new ISO4217Utility())->MXN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
