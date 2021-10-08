<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAUDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAUDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Australian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AUD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '036';
    
    public function testAUD(): void
    {
        $currency = ISO4217::AUD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityAUD(): void
    {
        $currency = (new ISO4217Utility())->AUD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AUD(), (new ISO4217Utility())->AUD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
