<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySEKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySEKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Swedish krona (plural: kronor)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SEK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '752';
    
    public function testSEK(): void
    {
        $currency = ISO4217::SEK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySEK(): void
    {
        $currency = (new ISO4217Utility())->SEK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SEK(), (new ISO4217Utility())->SEK());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
