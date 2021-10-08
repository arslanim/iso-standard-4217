<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCADTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCADTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Canadian dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CAD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '124';
    
    public function testCAD(): void
    {
        $currency = ISO4217::CAD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityCAD(): void
    {
        $currency = (new ISO4217Utility())->CAD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CAD(), (new ISO4217Utility())->CAD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
