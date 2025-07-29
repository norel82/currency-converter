# Currency Converter

[![CI](https://github.com/norel82/currency-converter/actions/workflows/ci.yml/badge.svg)](https://github.com/norel82/currency-converter/actions/workflows/ci.yml)

## Description

Simple PHP library to convert amounts between currencies based on predefined exchange rates.  
Includes unit tests, static analysis (PHPStan), and automated checks with GitHub Actions.

---

## Installation

Clone the repository and install dependencies via Composer:

```bash
git clone https://github.com/norel82/currency-converter.git
cd currency-converter
composer install
```


## Usage
Example usage:

```php
use App\CurrencyConverter;

$rates = [
    'EUR' => 1.0,
    'USD' => 1.2,
    'GBP' => 0.85,
];

$converter = new CurrencyConverter($rates);
echo $converter->convert(100, 'EUR', 'USD'); // 120
```


## Tests
Run PHPUnit tests with:

```bash
vendor/bin/phpunit
```

## Code Quality
- Static analysis via PHPStan: vendor/bin/phpstan analyse
- Code style enforced with PHP-CS-Fixer.

## Contributing
Feel free to submit issues or pull requests.
Please respect PSR-12 coding standards.

## License
MIT License