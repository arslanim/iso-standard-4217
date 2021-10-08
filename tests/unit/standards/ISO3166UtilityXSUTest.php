<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXSUTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXSUTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'SUCRE';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XSU';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '994';
    
    public function testXSU(): void
    {
        $currency = ISO4217::XSU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXSU(): void
    {
        $currency = (new ISO4217Utility())->XSU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XSU(), (new ISO4217Utility())->XSU());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
