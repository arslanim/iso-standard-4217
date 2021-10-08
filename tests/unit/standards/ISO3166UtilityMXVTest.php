<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMXVTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMXVTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mexican Unidad de Inversion (UDI) (funds code)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MXV';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '979';
    
    public function testMXV(): void
    {
        $currency = ISO4217::MXV();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityMXV(): void
    {
        $currency = (new ISO4217Utility())->MXV();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MXV(), (new ISO4217Utility())->MXV());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
