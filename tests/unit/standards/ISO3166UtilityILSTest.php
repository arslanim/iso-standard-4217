<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityILSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityILSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Israeli new shekel';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ILS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '376';
    
    public function testILS(): void
    {
        $currency = ISO4217::ILS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityILS(): void
    {
        $currency = (new ISO4217Utility())->ILS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ILS(), (new ISO4217Utility())->ILS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
