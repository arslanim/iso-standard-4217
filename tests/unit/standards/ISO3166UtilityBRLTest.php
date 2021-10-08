<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBRLTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBRLTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Brazilian real';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BRL';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '986';
    
    public function testBRL(): void
    {
        $currency = ISO4217::BRL();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBRL(): void
    {
        $currency = (new ISO4217Utility())->BRL();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BRL(), (new ISO4217Utility())->BRL());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
