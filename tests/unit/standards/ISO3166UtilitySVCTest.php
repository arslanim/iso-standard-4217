<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilitySVCTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilitySVCTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Salvadoran colÃ³n';
    private const EXPECTED_CURRENCY_ALPHA3 = 'SVC';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '222';
    
    public function testSVC(): void
    {
        $currency = ISO4217::SVC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilitySVC(): void
    {
        $currency = (new ISO4217Utility())->SVC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::SVC(), (new ISO4217Utility())->SVC());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
