<?php

namespace Kusabi\Tax\Tests;

use PHPUnit\Framework\TestCase;

class TaxTest extends TestCase
{
    public function testGrossFromNet()
    {
        $this->assertEquals(120.0, gross_from_net(100.0, 0.2));
        $this->assertEquals(200.0, gross_from_net(100.0, 1.0));
        $this->assertEquals(100.0, gross_from_net(100.0, 0.0));
        $this->assertEquals(1100.0, gross_from_net(100.0, 10.0));
    }

    public function testGrossFromTax()
    {
        $this->assertEquals(120.0, gross_from_tax(20.0, 0.2));
        $this->assertEquals(200.0, gross_from_tax(100.0, 1.0));
        $this->assertEquals(INF, gross_from_tax(0.0, 0.0));
        $this->assertEquals(1100.0, gross_from_tax(1000.0, 10.0));
    }

    public function testNetFromGross()
    {
        $this->assertEquals(100.0, net_from_gross(120.0, 0.2));
        $this->assertEquals(100.0, net_from_gross(200.0, 1.0));
        $this->assertEquals(100.0, net_from_gross(100.0, 0.0));
        $this->assertEquals(100.0, net_from_gross(1100.0, 10.0));
    }

    public function testNetFromTax()
    {
        $this->assertEquals(100.0, net_from_tax(20.0, 0.2));
        $this->assertEquals(100.0, net_from_tax(100.0, 1.0));
        $this->assertEquals(0.0, net_from_tax(0.0, 0.0));
        $this->assertEquals(100.0, net_from_tax(1000.0, 10.0));
    }

    public function testRateFromGrossAndTax()
    {
        $this->assertEquals(0.2, rate_from_gross_and_tax(120.0, 20.0));
        $this->assertEquals(0.0, rate_from_gross_and_tax(100.0, 0.0));
        $this->assertEquals(INF, rate_from_gross_and_tax(20.0, 20.0));
        $this->assertEquals(20.0, rate_from_gross_and_tax(21.0, 20.0));
    }

    public function testRateFromNetAndGross()
    {
        $this->assertEquals(0.2, rate_from_net_and_gross(100.0, 120.0));
        $this->assertEquals(0.0, rate_from_net_and_gross(100.0, 100.0));
        $this->assertEquals(5.0, rate_from_net_and_gross(20.0, 120.0));
        $this->assertEquals(0.0, rate_from_net_and_gross(0.0, 0.0));
        $this->assertEquals(-1.0, rate_from_net_and_gross(100.0, 0.0));
        $this->assertEquals(INF, rate_from_net_and_gross(0.0, 100.0));
        $this->assertEquals(-11.0, rate_from_net_and_gross(-10.0, 100.0));
    }

    public function testRateFromNetAndTax()
    {
        $this->assertEquals(0.2, rate_from_net_and_tax(100.0, 20.0));
        $this->assertEquals(0.0, rate_from_net_and_tax(100.0, 0.0));
        $this->assertEquals(1.0, rate_from_net_and_tax(20.0, 20.0));
        $this->assertEquals(INF, rate_from_net_and_tax(0.0, 20.0));
    }

    public function testTaxFromGross()
    {
        $this->assertEquals(20.0, tax_from_gross(120.0, 0.2));
        $this->assertEquals(100.0, tax_from_gross(200.0, 1.0));
        $this->assertEquals(0.0, tax_from_gross(100.0, 0.0));
        $this->assertEquals(1000.0, tax_from_gross(1100.0, 10.0));
    }

    public function testTaxFromNet()
    {
        $this->assertEquals(20.0, tax_from_net(100.0, 0.2));
        $this->assertEquals(100.0, tax_from_net(100.0, 1.0));
        $this->assertEquals(0.0, tax_from_net(100.0, 0.0));
        $this->assertEquals(1000.0, tax_from_net(100.0, 10.0));
    }
}
