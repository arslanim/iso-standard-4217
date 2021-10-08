<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXCDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXCDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'East Caribbean dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XCD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '951';
    
    public function testXCD(): void
    {
        $currency = ISO4217::XCD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXCD(): void
    {
        $currency = (new ISO4217Utility())->XCD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XCD(), (new ISO4217Utility())->XCD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
