<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXAUTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXAUTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Gold (one troy ounce)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XAU';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '959';
    
    public function testXAU(): void
    {
        $currency = ISO4217::XAU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXAU(): void
    {
        $currency = (new ISO4217Utility())->XAU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XAU(), (new ISO4217Utility())->XAU());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
