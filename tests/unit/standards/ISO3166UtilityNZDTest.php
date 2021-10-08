<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNZDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNZDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'New Zealand dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NZD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '554';
    
    public function testNZD(): void
    {
        $currency = ISO4217::NZD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityNZD(): void
    {
        $currency = (new ISO4217Utility())->NZD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NZD(), (new ISO4217Utility())->NZD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
