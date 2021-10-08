<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCLPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCLPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Chilean peso';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CLP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '152';
    
    public function testCLP(): void
    {
        $currency = ISO4217::CLP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityCLP(): void
    {
        $currency = (new ISO4217Utility())->CLP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CLP(), (new ISO4217Utility())->CLP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
