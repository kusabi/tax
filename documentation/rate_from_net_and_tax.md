# rate_from_net_and_tax

**rate_from_net_and_tax** - Calculate the tax rate from the tax and net values

## Description

```php
rate_from_net_and_tax(float $net, float $tax): float
```

Calculate the tax rate from the tax and net values

## Parameters

**net**

The net value

**tax**

The tax value

## Return Values

Returns the tax rate

## Examples

**Example # 1 Example uses of rate_from_net_and_tax()**

```php
echo rate_from_net_and_tax(100, 20);
```

The above example will output:

```
0.2
```