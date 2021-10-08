<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBOVTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBOVTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Bolivian Mvdol (funds code)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BOV';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '984';
    
    public function testBOV(): void
    {
        $currency = ISO4217::BOV();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBOV(): void
    {
        $currency = (new ISO4217Utility())->BOV();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BOV(), (new ISO4217Utility())->BOV());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
