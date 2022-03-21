<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityLRDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityLRDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Liberian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'LRD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '430';

    public function testLRD(): void
    {
        $currency = ISO4217::LRD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityLRD(): void
    {
        $currency = (new ISO4217Utility())->LRD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::LRD(), (new ISO4217Utility())->LRD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
