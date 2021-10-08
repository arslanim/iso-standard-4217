<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityAMDTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityAMDTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Armenian dram';
    private const EXPECTED_CURRENCY_ALPHA3 = 'AMD';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '051';
    
    public function testAMD(): void
    {
        $currency = ISO4217::AMD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityAMD(): void
    {
        $currency = (new ISO4217Utility())->AMD();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::AMD(), (new ISO4217Utility())->AMD());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
