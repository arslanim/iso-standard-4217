<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBIFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBIFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Burundian franc';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BIF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '108';
    
    public function testBIF(): void
    {
        $currency = ISO4217::BIF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBIF(): void
    {
        $currency = (new ISO4217Utility())->BIF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BIF(), (new ISO4217Utility())->BIF());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
