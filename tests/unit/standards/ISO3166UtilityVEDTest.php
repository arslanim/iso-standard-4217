<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityVEDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityVEDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Venezuelan bolÃ­var digital[16]';
    private const EXPECTED_CURRENCY_ALPHA3 = 'VED';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '926';
    
    public function testVED(): void
    {
        $currency = ISO4217::VED();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityVED(): void
    {
        $currency = (new ISO4217Utility())->VED();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::VED(), (new ISO4217Utility())->VED());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
