<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTOPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityTOPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Tongan paÊ»anga';
    private const EXPECTED_CURRENCY_ALPHA3 = 'TOP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '776';
    
    public function testTOP(): void
    {
        $currency = ISO4217::TOP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityTOP(): void
    {
        $currency = (new ISO4217Utility())->TOP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::TOP(), (new ISO4217Utility())->TOP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
