<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySDGTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySDGTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Sudanese pound';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SDG';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '938';
    
    public function testSDG(): void
    {
        $currency = ISO4217::SDG();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySDG(): void
    {
        $currency = (new ISO4217Utility())->SDG();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SDG(), (new ISO4217Utility())->SDG());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
