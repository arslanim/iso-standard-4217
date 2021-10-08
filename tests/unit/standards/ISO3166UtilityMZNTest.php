<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMZNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMZNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mozambican metical';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MZN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '943';
    
    public function testMZN(): void
    {
        $currency = ISO4217::MZN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityMZN(): void
    {
        $currency = (new ISO4217Utility())->MZN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MZN(), (new ISO4217Utility())->MZN());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
