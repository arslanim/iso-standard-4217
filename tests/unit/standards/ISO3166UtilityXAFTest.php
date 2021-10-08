<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXAFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXAFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'CFA franc BEAC';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XAF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '950';
    
    public function testXAF(): void
    {
        $currency = ISO4217::XAF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXAF(): void
    {
        $currency = (new ISO4217Utility())->XAF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XAF(), (new ISO4217Utility())->XAF());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
