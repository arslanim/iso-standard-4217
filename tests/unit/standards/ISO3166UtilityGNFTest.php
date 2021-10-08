<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGNFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityGNFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Guinean franc';
    private const EXPECTED_CURRENCY_ALPHA3 = 'GNF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '324';
    
    public function testGNF(): void
    {
        $currency = ISO4217::GNF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityGNF(): void
    {
        $currency = (new ISO4217Utility())->GNF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::GNF(), (new ISO4217Utility())->GNF());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
