<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandard4217\Currency;
use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllFunctionTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\functions
 * @group standard-4217-functions
 */
class GetAllFunctionTest extends TestCase
{
    public function testFunction(): void
    {
        $rawData = ISO4217::getRawStandardsData();

        $utilityStandards = ISO4217::getAll();
        $serviceStandards = (new ISO4217Utility())->getAll();

        $this->assertStandardsCountEqualsRawDataCount($utilityStandards, $rawData);
        $this->assertStandardsCountEqualsRawDataCount($serviceStandards, $rawData);
        $this->assertStandardsEqualsRawData($utilityStandards, $rawData);
        $this->assertStandardsEqualsRawData($serviceStandards, $rawData);
        $this->assertUtilityStandardsEqualsServiceStandards($utilityStandards, $serviceStandards);
    }

    /**
     * @param Currency[] $standards
     * @param array $rawData
     */
    private function assertStandardsEqualsRawData(array $standards, array $rawData): void
    {
        for ($i = 0; $i < count($rawData); $i++) {
            $this->assertStandardEqualsRawData($standards[$i], $rawData[$i]);
        }
    }

    private function assertUtilityStandardsEqualsServiceStandards(
        array $utilityStandards,
        array $serviceStandards
    ): void {
        $this->assertEquals($utilityStandards, $serviceStandards);
    }

    private function assertStandardsCountEqualsRawDataCount(array $standards, array $rawData): void
    {
        $this->assertEquals(count($standards), count($rawData));
    }

    private function assertStandardEqualsRawData(Currency $currency, array $rawData): void
    {
        $this->assertEquals($rawData[AttributeCodes::ATTRIBUTE_NAME], $currency->getName());
        $this->assertEquals($rawData[AttributeCodes::ATTRIBUTE_ALPHA3], $currency->getAlpha3());
        $this->assertEquals($rawData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE], $currency->getNumericCode());
    }
}
