<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAWGTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAWGTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Aruban florin';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AWG';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '533';
    
    public function testAWG(): void
    {
        $currency = ISO4217::AWG();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityAWG(): void
    {
        $currency = (new ISO4217Utility())->AWG();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AWG(), (new ISO4217Utility())->AWG());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
