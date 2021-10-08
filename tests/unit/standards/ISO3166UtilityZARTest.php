<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityZARTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityZARTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'South African rand';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ZAR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '710';
    
    public function testZAR(): void
    {
        $currency = ISO4217::ZAR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityZAR(): void
    {
        $currency = (new ISO4217Utility())->ZAR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ZAR(), (new ISO4217Utility())->ZAR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
