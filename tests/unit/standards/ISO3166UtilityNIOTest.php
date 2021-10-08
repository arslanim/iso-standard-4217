<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNIOTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNIOTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Nicaraguan cÃ³rdoba';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NIO';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '558';
    
    public function testNIO(): void
    {
        $currency = ISO4217::NIO();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityNIO(): void
    {
        $currency = (new ISO4217Utility())->NIO();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NIO(), (new ISO4217Utility())->NIO());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
