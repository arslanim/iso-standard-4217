<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBAMTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBAMTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bosnia and Herzegovina convertible mark';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BAM';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '977';

    public function testBAM(): void
    {
        $currency = ISO4217::BAM();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityBAM(): void
    {
        $currency = (new ISO4217Utility())->BAM();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BAM(), (new ISO4217Utility())->BAM());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
