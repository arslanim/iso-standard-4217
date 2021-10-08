<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTTDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityTTDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Trinidad and Tobago dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'TTD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '780';
    
    public function testTTD(): void
    {
        $currency = ISO4217::TTD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityTTD(): void
    {
        $currency = (new ISO4217Utility())->TTD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::TTD(), (new ISO4217Utility())->TTD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
