<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityOMRTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityOMRTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Omani rial';
    private const EXPECTED_CURRENCY_ALPHA3 = 'OMR';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '512';
    
    public function testOMR(): void
    {
        $currency = ISO4217::OMR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityOMR(): void
    {
        $currency = (new ISO4217Utility())->OMR();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::OMR(), (new ISO4217Utility())->OMR());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
