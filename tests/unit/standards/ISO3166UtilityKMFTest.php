<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKMFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKMFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Comoro franc';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KMF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '174';

    public function testKMF(): void
    {
        $currency = ISO4217::KMF();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityKMF(): void
    {
        $currency = (new ISO4217Utility())->KMF();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KMF(), (new ISO4217Utility())->KMF());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
