<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGMDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGMDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Gambian dalasi';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GMD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '270';
    
    public function testGMD(): void
    {
        $currency = ISO4217::GMD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityGMD(): void
    {
        $currency = (new ISO4217Utility())->GMD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GMD(), (new ISO4217Utility())->GMD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
