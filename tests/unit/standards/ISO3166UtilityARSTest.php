<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityARSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityARSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Argentine peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ARS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '032';
    
    public function testARS(): void
    {
        $currency = ISO4217::ARS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityARS(): void
    {
        $currency = (new ISO4217Utility())->ARS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ARS(), (new ISO4217Utility())->ARS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
