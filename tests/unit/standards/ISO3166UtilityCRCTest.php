<?php
                
namespace arslanimamutdinov\ISOStandard4217\tests\unit\standards;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityCRCTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\standards
 * @group standard-4217-utilities
 */
class ISO3166UtilityCRCTest extends TestCase
{
    private const EXPECTED_CURRENCY_NAME = 'Costa Rican colon';
    private const EXPECTED_CURRENCY_ALPHA3 = 'CRC';
    private const EXPECTED_CURRENCY_NUMERIC_CODE = '188';
    
    public function testCRC(): void
    {
        $currency = ISO4217::CRC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testUtilityCRC(): void
    {
        $currency = (new ISO4217Utility())->CRC();
        
        $this->assertStandardCorrect($currency);
    }
    
    public function testStandardsEqual(): void
    {
        $this->assertEquals(ISO4217::CRC(), (new ISO4217Utility())->CRC());
    }
    
    private function assertStandardCorrect(Currency $currency): void
    {
        $this->assertEquals(self::EXPECTED_CURRENCY_NAME, $currency->getName());
        $this->assertEquals(self::EXPECTED_CURRENCY_ALPHA3, $currency->getAlpha3());
        $this->assertEquals(self::EXPECTED_CURRENCY_NUMERIC_CODE, $currency->getNumericCode());
    }
}
