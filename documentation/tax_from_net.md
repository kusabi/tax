# tax_from_net

**tax_from_net** - Calculate the tax value from the net and tax rate

## Description

```php
tax_from_net(float $net, float $rate = 0.2): float
```

Calculate the tax value from the net and tax rate

## Parameters

**net**

The net value

**rate**

The tax rate. Defaults to 0.2 (20%)

## Return Values

Returns the taxable amount

## Examples

**Example # 1 Example uses of tax_from_net()**

```php
echo tax_from_net(100);
echo tax_from_net(100, 0.2);
```

The above example will output:

```
20.0
20.0
```