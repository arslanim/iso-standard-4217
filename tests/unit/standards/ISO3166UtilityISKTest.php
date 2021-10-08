<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityISKTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityISKTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Icelandic krÃ³na (plural: krÃ³nur)';
    private const EXPECTED_CURRENCY_ALPHA3 = 'ISK';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '352';
    
    public function testISK(): void
    {
        $currency = ISO4217::ISK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityISK(): void
    {
        $currency = (new ISO4217Utility())->ISK();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::ISK(), (new ISO4217Utility())->ISK());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
