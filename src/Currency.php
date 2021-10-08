<?php

namespace arslanimamutdinov\ISOStandard4217;

use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardAlpha3EmptyException;
use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardNameEmptyException;
use arslanimamutdinov\ISOStandard4217\exceptions\CurrencyStandardNumericCodeEmptyException;

class Currency
{
    private $name;
    private $alpha3;
    private $numericCode;

    public function __construct(string $name, string $alpha3, string $numericCode)
    {
        $this->validateAttributes($name, $alpha3, $numericCode);

        $this->name = $name;
        $this->alpha3 = $alpha3;
        $this->numericCode = $numericCode;
    }

    private function validateAttributes(string $name, string $alpha3, string $numericCode): void
    {
        if (empty($name)) {
            throw new CurrencyStandardNameEmptyException();
        }

        if (empty($alpha3)) {
            throw new CurrencyStandardAlpha3EmptyException();
        }

        if (empty($numericCode)) {
            throw new CurrencyStandardNumericCodeEmptyException();
        }
    }
}
