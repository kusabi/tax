# rate_from_net_and_gross

**rate_from_net_and_gross** - Calculate the tax rate from the gross and net values

## Description

```php
rate_from_net_and_gross(float $net, float $gross): float
```

Calculate the tax rate from the gross and net values

## Parameters

**net**

The net value

**gross**

The gross value

## Return Values

Returns the tax rate

## Examples

**Example # 1 Example uses of rate_from_net_and_gross()**

```php
echo rate_from_net_and_gross(100, 120);
```

The above example will output:

```
0.2
```