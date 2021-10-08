<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityPABTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityPABTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Panamanian balboa';
    private const EXPECTED_CURRENCY_ALPHA3 = 'PAB';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '590';
    
    public function testPAB(): void
    {
        $currency = ISO4217::PAB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityPAB(): void
    {
        $currency = (new ISO4217Utility())->PAB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::PAB(), (new ISO4217Utility())->PAB());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
