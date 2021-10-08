<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityHUFTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityHUFTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Hungarian forint';
    private const EXPECTED_CURRENCY_ALPHA3 = 'HUF';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '348';
    
    public function testHUF(): void
    {
        $currency = ISO4217::HUF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityHUF(): void
    {
        $currency = (new ISO4217Utility())->HUF();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::HUF(), (new ISO4217Utility())->HUF());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
