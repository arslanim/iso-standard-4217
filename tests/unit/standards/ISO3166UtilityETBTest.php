<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityETBTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityETBTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Ethiopian birr';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ETB';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '230';
    
    public function testETB(): void
    {
        $currency = ISO4217::ETB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityETB(): void
    {
        $currency = (new ISO4217Utility())->ETB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ETB(), (new ISO4217Utility())->ETB());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
