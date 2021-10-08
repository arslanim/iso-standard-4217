<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityKWDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityKWDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Kuwaiti dinar';
    private const EXPECTED_CURRENCY_ALPHA3 = 'KWD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '414';
    
    public function testKWD(): void
    {
        $currency = ISO4217::KWD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityKWD(): void
    {
        $currency = (new ISO4217Utility())->KWD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::KWD(), (new ISO4217Utility())->KWD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
