<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySTN[14]Test
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySTNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'SÃ£o TomÃ© and PrÃ­ncipe dobra';
    private const EXPECTED_CURRENCY_ALPHA3 = 'STN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '930';
    
    public function testSTN(): void
    {
        $currency = ISO4217::STN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySTN(): void
    {
        $currency = (new ISO4217Utility())->STN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::STN(), (new ISO4217Utility())->STN());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
