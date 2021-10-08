<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBNDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBNDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Brunei dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BND';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '096';
    
    public function testBND(): void
    {
        $currency = ISO4217::BND();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBND(): void
    {
        $currency = (new ISO4217Utility())->BND();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BND(), (new ISO4217Utility())->BND());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
