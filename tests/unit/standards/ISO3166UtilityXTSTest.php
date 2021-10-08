<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityXTSTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityXTSTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Code reserved for testing';
    private const EXPECTED_CURRENCY_ALPHA3 = 'XTS';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '963';
    
    public function testXTS(): void
    {
        $currency = ISO4217::XTS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityXTS(): void
    {
        $currency = (new ISO4217Utility())->XTS();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::XTS(), (new ISO4217Utility())->XTS());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
