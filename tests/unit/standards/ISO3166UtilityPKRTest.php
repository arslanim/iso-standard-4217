<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityPKRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityPKRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Pakistani rupee';
    private const EXPECTED_CURRENCY_ALPHA3 = 'PKR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '586';
    
    public function testPKR(): void
    {
        $currency = ISO4217::PKR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityPKR(): void
    {
        $currency = (new ISO4217Utility())->PKR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::PKR(), (new ISO4217Utility())->PKR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
