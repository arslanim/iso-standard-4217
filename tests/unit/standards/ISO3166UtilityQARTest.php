<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityQARTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityQARTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Qatari riyal';
    private const EXPECTED_CURRENCY_ALPHA3 = 'QAR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '634';

    public function testQAR(): void
    {
        $currency = ISO4217::QAR();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityQAR(): void
    {
        $currency = (new ISO4217Utility())->QAR();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::QAR(), (new ISO4217Utility())->QAR());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
