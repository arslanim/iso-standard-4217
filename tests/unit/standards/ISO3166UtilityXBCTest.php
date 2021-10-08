<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXBCTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXBCTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'European Unit of Account 9 (E.U.A.-9) (bond market unit)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XBC';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '957';
    
    public function testXBC(): void
    {
        $currency = ISO4217::XBC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXBC(): void
    {
        $currency = (new ISO4217Utility())->XBC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XBC(), (new ISO4217Utility())->XBC());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
