<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityLAKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityLAKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Lao kip';
    private const EXPECTED_CURRENCY_ALPHA3 = 'LAK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '418';

    public function testLAK(): void
    {
        $currency = ISO4217::LAK();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityLAK(): void
    {
        $currency = (new ISO4217Utility())->LAK();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::LAK(), (new ISO4217Utility())->LAK());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
