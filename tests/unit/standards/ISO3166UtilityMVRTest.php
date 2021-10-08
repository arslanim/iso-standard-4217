<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMVRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMVRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Maldivian rufiyaa';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MVR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '462';
    
    public function testMVR(): void
    {
        $currency = ISO4217::MVR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityMVR(): void
    {
        $currency = (new ISO4217Utility())->MVR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MVR(), (new ISO4217Utility())->MVR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
