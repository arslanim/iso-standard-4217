<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBTNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBTNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bhutanese ngultrum';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BTN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '064';
    
    public function testBTN(): void
    {
        $currency = ISO4217::BTN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBTN(): void
    {
        $currency = (new ISO4217Utility())->BTN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BTN(), (new ISO4217Utility())->BTN());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
