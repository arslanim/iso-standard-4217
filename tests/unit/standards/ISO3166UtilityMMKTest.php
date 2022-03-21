<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMMKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMMKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Myanmar kyat';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MMK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '104';

    public function testMMK(): void
    {
        $currency = ISO4217::MMK();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityMMK(): void
    {
        $currency = (new ISO4217Utility())->MMK();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MMK(), (new ISO4217Utility())->MMK());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
