<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMADTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMADTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Moroccan dirham';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MAD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '504';

    public function testMAD(): void
    {
        $currency = ISO4217::MAD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMAD(): void
    {
        $currency = (new ISO4217Utility())->MAD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MAD(), (new ISO4217Utility())->MAD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
