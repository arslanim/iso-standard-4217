<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCZKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCZKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Czech koruna';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CZK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '203';
    
    public function testCZK(): void
    {
        $currency = ISO4217::CZK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityCZK(): void
    {
        $currency = (new ISO4217Utility())->CZK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CZK(), (new ISO4217Utility())->CZK());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
