# net_from_gross

**net_from_gross** - Calculate the net value from the gross and tax rate

## Description

```php
net_from_gross(float $gross, float $rate = 0.2): float
```

Calculate the net value from the gross and tax rate

## Parameters

**gross**

The gross value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the net amount

## Examples

**Example # 1 Example uses of net_from_gross()**

```php
echo net_from_gross(120);
echo net_from_gross(120, 0.2);
```

The above example will output:

```
100.0
100.0
```