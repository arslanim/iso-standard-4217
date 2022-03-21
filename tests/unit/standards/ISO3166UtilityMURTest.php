<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMURTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMURTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mauritian rupee';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MUR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '480';

    public function testMUR(): void
    {
        $currency = ISO4217::MUR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMUR(): void
    {
        $currency = (new ISO4217Utility())->MUR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MUR(), (new ISO4217Utility())->MUR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
