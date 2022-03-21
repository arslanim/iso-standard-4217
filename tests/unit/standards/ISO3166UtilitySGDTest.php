<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySGDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySGDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Singapore dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SGD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '702';

    public function testSGD(): void
    {
        $currency = ISO4217::SGD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilitySGD(): void
    {
        $currency = (new ISO4217Utility())->SGD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SGD(), (new ISO4217Utility())->SGD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
