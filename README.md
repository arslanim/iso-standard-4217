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

ISO4217 - abstract class provides set of static function for working with ISO 4217 standard.

ISO4217Utility - service class wrapper over ISO4217 (need instantiate class object).

## Base component features

### ISO4217 features

Provides access to currency standard by alpha3-named static function.

For example:
```php
// returns instance of Currency class
// includes currency data for United Arab Emirates dirham
ISO4217::AED();
```

Provides access to currency raw data.

For example:

```php
ISO4217::getRawStandardsData();
```

Provides search standards by given currency alpha3 codes.

For example:

```php
// returns Currency[]
ISO4217::getAllByAlpha3Codes(['AED', 'GBP']);
```

Provides search standards by given currency numeric codes.

For example:

```php
// returns Currency[]
ISO4217::getAllByNumericCodes(['784', '826']);
```

Provides search standards by given currency alpha3 code.

For example:

```php
// returns Currency or null if not found
ISO4217::getByAlpha3('AED');
```

Provides search standards by given currency numeric code.

For example:

```php
// returns Currency or null if not found
ISO4217::getByNumericCode('784');
```

Provides access to all currency standards represented in array of Currency objects.

For example:

```php
// returns Currency[]
ISO4217::getAll();
```

### ISO4217Utility features

Provides all features from ISO4217 but with utility instance creation.

For example:

```php
$currencyUtility = new ISO4217Utility();

$currencyUtility->AED();
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

## Source(s)

- [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) by [Wikipedia](http://www.wikipedia.org) licensed under [CC BY-SA 3.0 Unported License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)
- [www.iso.org](http://www.iso.org)