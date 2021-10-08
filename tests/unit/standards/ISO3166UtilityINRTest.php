<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityINRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityINRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Indian rupee';
    private const EXPECTED_CURRENCY_ALPHA3 = 'INR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '356';
    
    public function testINR(): void
    {
        $currency = ISO4217::INR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityINR(): void
    {
        $currency = (new ISO4217Utility())->INR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::INR(), (new ISO4217Utility())->INR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
