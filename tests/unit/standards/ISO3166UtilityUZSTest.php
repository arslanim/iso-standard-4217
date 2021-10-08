<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityUZSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityUZSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Uzbekistan som';
    private const EXPECTED_CURRENCY_ALPHA3 = 'UZS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '860';
    
    public function testUZS(): void
    {
        $currency = ISO4217::UZS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityUZS(): void
    {
        $currency = (new ISO4217Utility())->UZS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::UZS(), (new ISO4217Utility())->UZS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
