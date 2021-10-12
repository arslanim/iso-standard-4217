<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllByNumericCodesTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\functions
 * @group standard-4217-functions
 */
class GetAllByNumericCodesTest extends TestCase
{
    private const EXISTED_NUMERIC_CODE_VALUES = ['978', '643'];

    private const STANDARDS_EXPECTED = [
        [
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '643',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'RUB',
            AttributeCodes::ATTRIBUTE_NAME => 'Russian ruble',
        ],
        [
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "978",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "EUR",
            AttributeCodes::ATTRIBUTE_NAME => "Euro",
        ],
    ];

    public function testFunctionReturnsStandardsArray(): void
    {
        $utilityStandards = ISO4217::getAllByNumericCodes(self::EXISTED_NUMERIC_CODE_VALUES);
        $serviceStandards = (new ISO4217Utility())->getAllByNumericCodes(self::EXISTED_NUMERIC_CODE_VALUES);

        $this->assertUtilityStandardsCountEqualsServiceStandardsCount($utilityStandards, $serviceStandards);
        $this->assertUtilityStandardsEqualsServiceStandards($utilityStandards, $serviceStandards);
        $this->assertActualStandardsEqualsExpected($utilityStandards, self::STANDARDS_EXPECTED);
        $this->assertActualStandardsEqualsExpected($serviceStandards, self::STANDARDS_EXPECTED);
    }

    public function testFunctionReturnsEmptyArray(): void
    {
        $utilityStandards = ISO4217::getAllByNumericCodes(['foo', 'bar',]);
        $serviceStandards = (new ISO4217Utility())->getAllByNumericCodes(['foo', 'bar',]);

        $this->assertEmpty($utilityStandards);
        $this->assertEmpty($serviceStandards);
        $this->assertUtilityStandardsCountEqualsServiceStandardsCount($utilityStandards, $serviceStandards);
        $this->assertUtilityStandardsEqualsServiceStandards($utilityStandards, $serviceStandards);
    }

    private function assertUtilityStandardsEqualsServiceStandards(
        array $utilityStandards,
        array $serviceStandards
    ): void {
        $this->assertEquals($utilityStandards, $serviceStandards);
    }

    private function assertUtilityStandardsCountEqualsServiceStandardsCount(
        array $utilityStandards,
        array $serviceStandards
    ): void {
        $this->assertEquals(count($utilityStandards), count($serviceStandards));
    }

    /**
     * @param Currency[] $actualStandards
     * @param array $expectedStandards
     */
    private function assertActualStandardsEqualsExpected(array $actualStandards, array $expectedStandards): void
    {
        foreach ($actualStandards as $actualStandard) {
            $expectedStandard = array_filter(
                $expectedStandards,
                function (array $rawStandardData) use ($actualStandard): bool {
                    return $rawStandardData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE] === $actualStandard->getNumericCode() &&
                        $rawStandardData[AttributeCodes::ATTRIBUTE_ALPHA3] === $actualStandard->getAlpha3() &&
                        $rawStandardData[AttributeCodes::ATTRIBUTE_NAME] === $actualStandard->getName();
                }
            );

            $this->assertNotEmpty($expectedStandard);
        }
    }
}
