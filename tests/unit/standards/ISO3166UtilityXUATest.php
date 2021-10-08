<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXUATest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXUATest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'ADB Unit of Account';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XUA';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '965';
    
    public function testXUA(): void
    {
        $currency = ISO4217::XUA();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXUA(): void
    {
        $currency = (new ISO4217Utility())->XUA();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XUA(), (new ISO4217Utility())->XUA());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
