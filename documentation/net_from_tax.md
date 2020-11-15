# net_from_tax

**net_from_tax** - Calculate the net value from the tax and tax rate

## Description

```php
net_from_tax(float $tax, float $rate = 0.2): float
```

Calculate the net value from the tax and tax rate

## Parameters

**tax**

The tax value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the net amount

## Examples

**Example # 1 Example uses of net_from_tax()**

```php
echo net_from_tax(20);
echo net_from_tax(20, 0.2);
```

The above example will output:

```
100.0
100.0
```