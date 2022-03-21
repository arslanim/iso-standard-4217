<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUSNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUSNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'United States dollar (next day) (funds code)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'USN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '997';

    public function testUSN(): void
    {
        $currency = ISO4217::USN();

        $this->assertStandardCorrect($currency);
    }

    public function testUtilityUSN(): void
    {
        $currency = (new ISO4217Utility())->USN();

        $this->assertStandardCorrect($currency);
    }

    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::USN(), (new ISO4217Utility())->USN());
    }

    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
