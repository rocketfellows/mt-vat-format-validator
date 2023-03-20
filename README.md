# Malta vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Malta vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/mt-vat-format-validator
```

## Usage example

Valid Malta vat number:

```php
$validator = new MTVatFormatValidator();
$validator->isValid('MT12345678');
$validator->isValid('12345678');
```

Returns:

```shell
true
true
```

Invalid Malta vat number:

```php
$validator = new MTVatFormatValidator();
$validator->isValid('MT123456789');
$validator->isValid('MT1234567');
$validator->isValid('123456789');
$validator->isValid('1234567');
$validator->isValid('DE12345678');
$validator->isValid('');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
