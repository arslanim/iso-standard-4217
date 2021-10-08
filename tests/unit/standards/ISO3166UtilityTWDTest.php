<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTWDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityTWDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'New Taiwan dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'TWD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '901';
    
    public function testTWD(): void
    {
        $currency = ISO4217::TWD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityTWD(): void
    {
        $currency = (new ISO4217Utility())->TWD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::TWD(), (new ISO4217Utility())->TWD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
