<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityFJDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityFJDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Fiji dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'FJD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '242';

    public function testFJD(): void
    {
        $currency = ISO4217::FJD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityFJD(): void
    {
        $currency = (new ISO4217Utility())->FJD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::FJD(), (new ISO4217Utility())->FJD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
