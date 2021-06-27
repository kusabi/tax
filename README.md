# PHP Tax

![Tests](https://github.com/kusabi/tax/workflows/tests/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/tax/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/tax)
[![Licence Badge](https://img.shields.io/github/license/kusabi/tax.svg)](https://img.shields.io/github/license/kusabi/tax.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/tax.svg)](https://img.shields.io/github/release/kusabi/tax.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/tax.svg)](https://img.shields.io/github/tag/kusabi/tax.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/tax.svg)](https://img.shields.io/github/issues/kusabi/tax.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/tax.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/tax.svg)

<sup>A library for calculating tax in PHP</sup>

## Compatibility and dependencies

This library is compatible with PHP version `5.6`, `7.0`, `7.1`, `7.2`, `7.3`, `7.4`, `8.0` and `8.1`.

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/tax
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/tax": "^1.0"
    }
}
```

## PHPBench Benchmark Results

Below are the latest benchmark results taken on my local machine for PHP 5.4 at 2021-06-27 12:48:32

benchmark | subject | mean | diff
 --- | --- | --- | --- 
TaxBench | benchTaxFromNet | 1.013μs | 0.00%
TaxBench | benchGrossFromNet | 1.034μs | +2.11%
TaxBench | benchNetFromTax | 1.064μs | +5.05%
TaxBench | benchTaxFromGross | 1.072μs | +5.88%
TaxBench | benchGrossFromTax | 1.077μs | +6.36%
TaxBench | benchRateFromNetAndTax | 1.216μs | +20.07%
TaxBench | benchNetFromGross | 1.547μs | +52.73%
TaxBench | benchRateFromNetAndGross | 1.686μs | +66.53%
TaxBench | benchRateFromGrossAndTax | 1.721μs | +70.00%


## Functions

This library adds a number of functions to calculate tax.

Below you can find links to the documentation for the new features.


| Function | Description |
| --- | ----------- |
| [gross_from_net](documentation/gross_from_net.md) | Calculate the gross amount from the net amount and tax rate |
| [gross_from_tax](documentation/gross_from_tax.md) | Calculate the gross amount from the tax amount and tax rate |
| [net_from_gross](documentation/net_from_gross.md) | Calculate the net amount from the gross amount and tax rate |
| [net_from_tax](documentation/net_from_tax.md) | Calculate the net amount from the tax amount and tax rate |
| [rate_from_gross_and_tax](documentation/rate_from_gross_and_tax.md) | Calculate the tax rate from the gross amount and tax amount |
| [rate_from_net_and_gross](documentation/rate_from_net_and_gross.md) | Calculate the tax rate from the net amount and gross amount |
| [rate_from_net_and_tax](documentation/rate_from_net_and_tax.md) | Calculate the tax rate from the net amount and tax amount |
| [tax_from_gross](documentation/tax_from_gross.md) | Calculate the tax amount from the gross amount and tax rate |
| [tax_from_net](documentation/tax_from_net.md) | Calculate the tax amount from the net amount and tax rate |
