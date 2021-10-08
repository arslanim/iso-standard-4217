<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKGSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKGSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Kyrgyzstani som';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KGS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '417';
    
    public function testKGS(): void
    {
        $currency = ISO4217::KGS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityKGS(): void
    {
        $currency = (new ISO4217Utility())->KGS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KGS(), (new ISO4217Utility())->KGS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
