<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGBPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGBPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Pound sterling';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GBP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '826';
    
    public function testGBP(): void
    {
        $currency = ISO4217::GBP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityGBP(): void
    {
        $currency = (new ISO4217Utility())->GBP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GBP(), (new ISO4217Utility())->GBP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
