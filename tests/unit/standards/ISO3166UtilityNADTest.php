<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityNADTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityNADTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Namibian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'NAD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '516';
    
    public function testNAD(): void
    {
        $currency = ISO4217::NAD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityNAD(): void
    {
        $currency = (new ISO4217Utility())->NAD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::NAD(), (new ISO4217Utility())->NAD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
