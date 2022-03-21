<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKZTTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKZTTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Kazakhstani tenge';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KZT';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '398';

    public function testKZT(): void
    {
        $currency = ISO4217::KZT();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityKZT(): void
    {
        $currency = (new ISO4217Utility())->KZT();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KZT(), (new ISO4217Utility())->KZT());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
