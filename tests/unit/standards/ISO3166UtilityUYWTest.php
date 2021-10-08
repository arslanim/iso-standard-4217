<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUYWTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUYWTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Unidad previsional[15]';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UYW';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '927';
    
    public function testUYW(): void
    {
        $currency = ISO4217::UYW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityUYW(): void
    {
        $currency = (new ISO4217Utility())->UYW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UYW(), (new ISO4217Utility())->UYW());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
