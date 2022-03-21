<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMNTTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMNTTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mongolian tÃ¶grÃ¶g';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MNT';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '496';

    public function testMNT(): void
    {
        $currency = ISO4217::MNT();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMNT(): void
    {
        $currency = (new ISO4217Utility())->MNT();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MNT(), (new ISO4217Utility())->MNT());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
