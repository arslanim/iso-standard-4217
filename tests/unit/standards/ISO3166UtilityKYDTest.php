<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKYDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKYDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Cayman Islands dollar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KYD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '136';
    
    public function testKYD(): void
    {
        $currency = ISO4217::KYD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityKYD(): void
    {
        $currency = (new ISO4217Utility())->KYD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KYD(), (new ISO4217Utility())->KYD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
