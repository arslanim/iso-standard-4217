<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKRWTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKRWTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'South Korean won';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KRW';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '410';
    
    public function testKRW(): void
    {
        $currency = ISO4217::KRW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityKRW(): void
    {
        $currency = (new ISO4217Utility())->KRW();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KRW(), (new ISO4217Utility())->KRW());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
