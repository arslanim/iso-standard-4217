<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySBDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySBDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Solomon Islands dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SBD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '090';

    public function testSBD(): void
    {
        $currency = ISO4217::SBD();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilitySBD(): void
    {
        $currency = (new ISO4217Utility())->SBD();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SBD(), (new ISO4217Utility())->SBD());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
