# tax_from_gross

**tax_from_gross** - Calculate the tax value from the gross and tax rate

## Description

```php
tax_from_gross(float $gross, float $rate = 0.2): float
```

Calculate the tax value from the gross and tax rate

## Parameters

**gross**

The gross value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the taxable amount

## Examples

**Example # 1 Example uses of tax_from_gross()**

```php
echo tax_from_gross(120);
echo tax_from_gross(120, 0.2);
```

The above example will output:

```
20.0
20.0
```