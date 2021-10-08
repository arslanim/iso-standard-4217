<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityLSLTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityLSLTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Lesotho loti';
    private const EXPECTED_CURRENCY_ALPHA3 = 'LSL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '426';
    
    public function testLSL(): void
    {
        $currency = ISO4217::LSL();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityLSL(): void
    {
        $currency = (new ISO4217Utility())->LSL();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::LSL(), (new ISO4217Utility())->LSL());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
