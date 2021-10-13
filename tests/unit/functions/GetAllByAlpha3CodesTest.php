<?php

namespace arslanimamutdinov\ISOStandard4217\tests\unit\functions;

use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPStan\Testing\TestCase;

/**
 * @group standard-4217-functions
 */
class GetAllByAlpha3CodesTest extends TestCase
{
    private const EXISTED_NUMERIC_CODE_VALUES = ['RUB', 'EUR'];

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
}
