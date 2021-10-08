<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXBATest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXBATest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'European Composite Unit (EURCO) (bond market unit)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XBA';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '955';
    
    public function testXBA(): void
    {
        $currency = ISO4217::XBA();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXBA(): void
    {
        $currency = (new ISO4217Utility())->XBA();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XBA(), (new ISO4217Utility())->XBA());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
