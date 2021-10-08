<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardAlpha3EmptyException;
use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardNameEmptyException;
use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardNumericCodeEmptyException;
use PHPUnit\Framework\TestCase;

/**
 * Class CurrencyTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit
 * @group standard-4217
 */
class CurrencyTest extends TestCase
{
    private const NAME_TEST_VALUE = 'foo';
    private const ALPHA3_TEST_VALUE = 'foobar';
    private const NUMERIC_CODE_TEST_VALUE = 'foobar';

    public function testSuccessCreate(): void
    {
        $currency = new Currency(self::NAME_TEST_VALUE, self::ALPHA3_TEST_VALUE, self::NUMERIC_CODE_TEST_VALUE);

        $this->assertEquals(self::NAME_TEST_VALUE, $currency->getName());
        $this->assertEquals(self::ALPHA3_TEST_VALUE, $currency->getAlpha3());
        $this->assertEquals(self::NUMERIC_CODE_TEST_VALUE, $currency->getNumericCode());
    }

    /**
     * @dataProvider getValidationTestData
     * @param array $data
     * @param string $exceptionClassName
     */
    public function testValidation(array $data, string $exceptionClassName): void
    {
        $this->expectException($exceptionClassName);

        (new Currency($data['name'], $data['alpha3'], $data['numericCode']));
    }

    public function getValidationTestData(): array
    {
        return [
            [
                'data' => [
                    'name' => '',
                    'alpha3' => '',
                    'numericCode' => '',
                ],
                'expectedException' => CurrencyStandardNameEmptyException::class,
            ],
            [
                'data' => [
                    'name' => 'foo',
                    'alpha3' => '',
                    'numericCode' => '',
                ],
                'expectedException' => CurrencyStandardAlpha3EmptyException::class,
            ],
            [
                'data' => [
                    'name' => 'foo',
                    'alpha3' => 'bar',
                    'numericCode' => '',
                ],
                'expectedException' => CurrencyStandardNumericCodeEmptyException::class,
            ],
        ];
    }
}
