<?php

namespace arslanimamutdinov\ISOStandard4217;

class Currency
{
    private $name;
    private $alpha3;
    private $numericCode;

    public function __construct(string $name, string $alpha3, string $numericCode)
    {
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
