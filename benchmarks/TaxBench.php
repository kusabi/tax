<?php

namespace Kusabi\Tax\Benchmarks;

/**
 * @Revs(10000)
 * @Iterations(10)
 */
class TaxBench
{
    public function benchGrossFromNet()
    {
        gross_from_net(100.0, 0.2);
    }

    public function benchGrossFromTax()
    {
        gross_from_tax(20.0, 0.2);
    }

    public function benchNetFromGross()
    {
        net_from_gross(120.0, 0.2);
    }

    public function benchNetFromTax()
    {
        net_from_tax(20.0, 0.2);
    }

    public function benchRateFromGrossAndTax()
    {
        rate_from_gross_and_tax(120.0, 20.0);
    }

    public function benchRateFromNetAndGross()
    {
        rate_from_net_and_gross(100.0, 120.0);
    }

    public function benchRateFromNetAndTax()
    {
        rate_from_net_and_tax(100.0, 20.0);
    }

    public function benchTaxFromGross()
    {
        tax_from_gross(120.0, 0.2);
    }

    public function benchTaxFromNet()
    {
        tax_from_net(100.0, 0.2);
    }
}
