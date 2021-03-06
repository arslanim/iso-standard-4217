<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMGATest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMGATest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Malagasy ariary';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MGA';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '969';

    public function testMGA(): void
    {
        $currency = ISO4217::MGA();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMGA(): void
    {
        $currency = (new ISO4217Utility())->MGA();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MGA(), (new ISO4217Utility())->MGA());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
