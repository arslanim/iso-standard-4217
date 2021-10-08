<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityDZDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityDZDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Algerian dinar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'DZD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '012';
    
    public function testDZD(): void
    {
        $currency = ISO4217::DZD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityDZD(): void
    {
        $currency = (new ISO4217Utility())->DZD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::DZD(), (new ISO4217Utility())->DZD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
