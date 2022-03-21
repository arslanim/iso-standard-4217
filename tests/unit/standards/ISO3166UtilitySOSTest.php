<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySOSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySOSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Somali shilling';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SOS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '706';

    public function testSOS(): void
    {
        $currency = ISO4217::SOS();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilitySOS(): void
    {
        $currency = (new ISO4217Utility())->SOS();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SOS(), (new ISO4217Utility())->SOS());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
