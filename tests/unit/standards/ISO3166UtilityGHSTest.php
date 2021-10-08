<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGHSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGHSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Ghanaian cedi';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GHS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '936';
    
    public function testGHS(): void
    {
        $currency = ISO4217::GHS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityGHS(): void
    {
        $currency = (new ISO4217Utility())->GHS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GHS(), (new ISO4217Utility())->GHS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
