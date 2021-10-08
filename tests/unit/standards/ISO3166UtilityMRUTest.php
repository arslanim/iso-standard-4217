<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityMRU[12]Test
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityMRUTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Mauritanian ouguiya';
    private const EXPECTED_CURRENCY_ALPHA3 = 'MRU';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '929';
    
    public function testMRU(): void
    {
        $currency = ISO4217::MRU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityMRU(): void
    {
        $currency = (new ISO4217Utility())->MRU();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::MRU(), (new ISO4217Utility())->MRU());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
