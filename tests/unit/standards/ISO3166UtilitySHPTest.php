<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySHPTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySHPTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Saint Helena pound';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SHP';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '654';
    
    public function testSHP(): void
    {
        $currency = ISO4217::SHP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySHP(): void
    {
        $currency = (new ISO4217Utility())->SHP();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SHP(), (new ISO4217Utility())->SHP());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
