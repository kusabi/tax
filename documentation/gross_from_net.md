# gross_from_net

**gross_from_net** - Calculate the gross value from the net and tax rate

## Description

```php
gross_from_net(float $net, float $rate = 0.2): float
```

Calculate the gross value from the net and tax rate

## Parameters

**net**

The net value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the gross amount

## Examples

**Example # 1 Example uses of gross_from_net()**

```php
echo gross_from_net(100);
echo gross_from_net(100, 0.2);
```

The above example will output:

```
120.0
120.0
```