<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGTQTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGTQTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Guatemalan quetzal';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GTQ';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '320';
    
    public function testGTQ(): void
    {
        $currency = ISO4217::GTQ();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityGTQ(): void
    {
        $currency = (new ISO4217Utility())->GTQ();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GTQ(), (new ISO4217Utility())->GTQ());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
