<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySSPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySSPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'South Sudanese pound';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SSP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '728';
    
    public function testSSP(): void
    {
        $currency = ISO4217::SSP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySSP(): void
    {
        $currency = (new ISO4217Utility())->SSP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SSP(), (new ISO4217Utility())->SSP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
