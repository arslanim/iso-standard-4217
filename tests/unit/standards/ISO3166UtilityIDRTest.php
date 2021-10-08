<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityIDRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityIDRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Indonesian rupiah';
    private const EXPECTED_CURRENCY_ALPHA3 = 'IDR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '360';
    
    public function testIDR(): void
    {
        $currency = ISO4217::IDR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityIDR(): void
    {
        $currency = (new ISO4217Utility())->IDR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::IDR(), (new ISO4217Utility())->IDR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
