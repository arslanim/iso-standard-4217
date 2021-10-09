<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandard4217\ISO4217;
use arslanimamutdinov\ISOStandard4217\ISO4217Utility;
use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPUnit\Framework\TestCase;

/**
 * Class GetRawStandardsDataFunctionTest
 * @package arslanimamutdinov\ISOStandard4217\tests\unit\functions
 * @group standard-4217-functions
 */
class GetRawStandardsDataFunctionTest extends TestCase
{
    public function testFunction(): void
    {
        $utilityRawStandardsData = ISO4217::getRawStandardsData();
        $serviceRawStandardsData = (new ISO4217Utility())->getRawStandardsData();

        $this->assertRawDataCorrect($utilityRawStandardsData);
        $this->assertRawDataCorrect($serviceRawStandardsData);
    }

    private function assertRawDataCorrect(array $actualRawStandardsData): void
    {
        $this->assertNotEmpty($actualRawStandardsData);

        foreach ($actualRawStandardsData as $actualRawStandardData) {
            $this->assertRawStandardDataNotEmpty($actualRawStandardData);
        }
    }

    private function assertRawStandardDataNotEmpty(array $actualRawStandardData): void
    {
        $this->assertNotEmpty($actualRawStandardData[AttributeCodes::ATTRIBUTE_NAME]);
        $this->assertNotEmpty($actualRawStandardData[AttributeCodes::ATTRIBUTE_ALPHA3]);
        $this->assertNotEmpty($actualRawStandardData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE]);
    }
}
