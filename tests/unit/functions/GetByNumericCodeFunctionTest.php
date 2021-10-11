<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetByNumericCodeFunctionTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\functions
 * @group standard-4217-functions
 */
class GetByNumericCodeFunctionTest extends TestCase
{
    private const EXISTED_NUMERIC_CODE_VALUE = '643';

    private const CURRENCY_NAME_EXPECTED_VALUE = "Russian ruble";
    private const CURRENCY_ALPHA3_EXPECTED_VALUE = "RUB";
    private const CURRENCY_NUMERIC_CODE_EXPECTED_VALUE = "643";

    public function testFunctionResultExists(): void
    {
        $utilityResult = ISO4217::getByNumericCode(self::EXISTED_NUMERIC_CODE_VALUE);
        $serviceResult = (new ISO4217Utility())->getByNumericCode(self::EXISTED_NUMERIC_CODE_VALUE);

        $this->assertExpectedCurrency($utilityResult);
        $this->assertExpectedCurrency($serviceResult);
        $this->assertUtilityCurrencyEqualsServiceCurrency($utilityResult, $serviceResult);
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
