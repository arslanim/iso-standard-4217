<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBSDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBSDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bahamian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BSD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '044';
    
    public function testBSD(): void
    {
        $currency = ISO4217::BSD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBSD(): void
    {
        $currency = (new ISO4217Utility())->BSD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BSD(), (new ISO4217Utility())->BSD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
