<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNOKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNOKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Norwegian krone';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NOK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '578';
    
    public function testNOK(): void
    {
        $currency = ISO4217::NOK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityNOK(): void
    {
        $currency = (new ISO4217Utility())->NOK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NOK(), (new ISO4217Utility())->NOK());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
