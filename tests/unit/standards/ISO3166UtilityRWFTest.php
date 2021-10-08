<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityRWFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityRWFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Rwandan franc';
    private const EXPECTED_CURRENCY_ALPHA3 = 'RWF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '646';
    
    public function testRWF(): void
    {
        $currency = ISO4217::RWF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityRWF(): void
    {
        $currency = (new ISO4217Utility())->RWF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::RWF(), (new ISO4217Utility())->RWF());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
