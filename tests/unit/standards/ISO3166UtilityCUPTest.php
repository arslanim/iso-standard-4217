<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCUPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCUPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Cuban peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CUP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '192';
    
    public function testCUP(): void
    {
        $currency = ISO4217::CUP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityCUP(): void
    {
        $currency = (new ISO4217Utility())->CUP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CUP(), (new ISO4217Utility())->CUP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
