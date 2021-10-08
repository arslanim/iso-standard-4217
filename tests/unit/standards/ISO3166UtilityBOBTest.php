<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityBOBTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityBOBTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Boliviano';
    private const EXPECTED_CURRENCY_ALPHA3 = 'BOB';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '068';
    
    public function testBOB(): void
    {
        $currency = ISO4217::BOB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityBOB(): void
    {
        $currency = (new ISO4217Utility())->BOB();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::BOB(), (new ISO4217Utility())->BOB());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
