# gross_from_tax

**gross_from_tax** - Calculate the gross value from the tax and tax rate

## Description

```php
gross_from_tax(float $tax, float $rate = 0.2): float
```

Calculate the gross value from the tax and tax rate

## Parameters

**tax**

The tax value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the gross amount

## Examples

**Example # 1 Example uses of gross_from_tax()**

```php
echo gross_from_tax(20);
echo gross_from_tax(20, 0.2);
```

The above example will output:

```
120.0
120.0
```