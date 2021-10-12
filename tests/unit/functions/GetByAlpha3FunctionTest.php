<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetByAlpha3FunctionTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\functions
 * @group standard-4217-functions
 */
class GetByAlpha3FunctionTest extends TestCase
{
    private const EXISTED_ALPHA3_CODE_VALUE = 'RUB';

    private const CURRENCY_NAME_EXPECTED_VALUE = "Russian ruble";
    private const CURRENCY_ALPHA3_EXPECTED_VALUE = "RUB";
    private const CURRENCY_NUMERIC_CODE_EXPECTED_VALUE = "643";

    public function testFunctionResultExists(): void
    {
        $utilityResult = ISO4217::getByAlpha3(self::EXISTED_ALPHA3_CODE_VALUE);
        $serviceResult = (new ISO4217Utility())->getByAlpha3(self::EXISTED_ALPHA3_CODE_VALUE);

        $this->assertExpectedCurrency($utilityResult);
        $this->assertExpectedCurrency($serviceResult);
        $this->assertUtilityCurrencyEqualsServiceCurrency($utilityResult, $serviceResult);
    }

    public function testFunctionResultNullOnUnknownAlpha3Code(): void
    {
        $this->assertNull(ISO4217::getByAlpha3('foo'));
        $this->assertNull((new ISO4217Utility())->getByAlpha3('foo'));
    }

    private function assertExpectedCurrency(Currency $currency): void
    {
        $this->assertEquals(self::CURRENCY_NAME_EXPECTED_VALUE, $currency->getName());
        $this->assertEquals(self::CURRENCY_ALPHA3_EXPECTED_VALUE, $currency->getAlpha3());
        $this->assertEquals(self::CURRENCY_NUMERIC_CODE_EXPECTED_VALUE, $currency->getNumericCode());
    }

    private function assertUtilityCurrencyEqualsServiceCurrency(
        Currency $utilityCurrency,
        Currency $serviceCurrency
    ): void {
        $this->assertEquals($utilityCurrency, $serviceCurrency);
    }
}
