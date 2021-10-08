<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityZMWTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityZMWTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Zambian kwacha';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ZMW';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '967';
    
    public function testZMW(): void
    {
        $currency = ISO4217::ZMW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityZMW(): void
    {
        $currency = (new ISO4217Utility())->ZMW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ZMW(), (new ISO4217Utility())->ZMW());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
