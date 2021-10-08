<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNGNTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNGNTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Nigerian naira';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NGN';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '566';
    
    public function testNGN(): void
    {
        $currency = ISO4217::NGN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityNGN(): void
    {
        $currency = (new ISO4217Utility())->NGN();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NGN(), (new ISO4217Utility())->NGN());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
