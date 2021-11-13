# ISO 4217 standard utilities

![Code Coverage Badge](./badge.svg)

This component provides features for ISO 4217 standard - get currency codes according to standard.

## Installation

```php
composer require arslanimamutdinov/iso-standard-4217
```

## Terms and designations

- alpha3 - three-letter currency code e.g. RUB;
- numericCodes - numeric currency code e.g. 643;
- name - string currency name e.g. Russian ruble.

## Component parts description

Currency - ISO 4217 standard model, contains properties:
- name - currency name;
- alpha3 - currency alpha3 code;
- numericCode - currency numeric code.

ISO4217 - class provides set of function for working with ISO 4217 standard.

ISO4217Utility - service class wrapper over ISO4217 (need instantiate class object).