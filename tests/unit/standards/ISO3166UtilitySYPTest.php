<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySYPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySYPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Syrian pound';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SYP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '760';
    
    public function testSYP(): void
    {
        $currency = ISO4217::SYP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySYP(): void
    {
        $currency = (new ISO4217Utility())->SYP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SYP(), (new ISO4217Utility())->SYP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
