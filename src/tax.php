<?php

if (!function_exists('gross_from_net')) {
    /**
     * Calculate the gross value from the net value
     *
     * @param float $net
     * @param float $rate
     *
     * @return float
     */
    function gross_from_net($net, $rate = .2)
    {
        return $net + $net * $rate;
    }
}

if (!function_exists('gross_from_tax')) {
    /**
     * Calculate the gross value from the tax value
     *
     * @param float $tax
     * @param float $rate
     *
     * @return float
     */
    function gross_from_tax($tax, $rate = .2)
    {
        if ($rate == 0) {
            return INF;
        }
        return $tax * (1.0 + (1.0 / $rate));
    }
}

if (!function_exists('net_from_gross')) {
    /**
     * Calculate the net value from the gross value
     *
     * @param float $gross
     * @param float $rate
     *
     * @return float
     */
    function net_from_gross($gross, $rate = .2)
    {
        if ($rate == 0) {
            return $gross;
        }
        return $gross - $gross / (1 + (1 / $rate));
    }
}

if (!function_exists('net_from_tax')) {
    /**
     * Calculate the gross value from the tax value
     *
     * @param float $tax
     * @param float $rate
     *
     * @return float
     */
    function net_from_tax($tax, $rate = .2)
    {
        if ($rate == 0) {
            return $tax;
        }
        return $tax / $rate;
    }
}

if (!function_exists('rate_from_gross_and_tax')) {
    /**
     * Calculate the tax rate from the gross and tax values
     *
     * @param float $gross
     * @param float $tax
     *
     * @return float
     */
    function rate_from_gross_and_tax($gross, $tax)
    {
        $net = $gross - $tax;
        if ($net == 0 && $tax != 0) {
            return INF;
        }
        if ($net == 0 || $tax == 0) {
            return 0.0;
        }
        return 1 / ($net / $tax);
    }
}

if (!function_exists('rate_from_net_and_gross')) {
    /**
     * Calculate the tax rate from the net and gross values
     *
     * @param float $net
     * @param float $gross
     *
     * @return float
     */
    function rate_from_net_and_gross($net, $gross)
    {
        $tax = $gross - $net;
        if ($net == 0 && $tax != 0) {
            return INF;
        }
        if ($net == 0 || $tax == 0) {
            return 0.0;
        }
        return 1 / ($net / $tax);
    }
}

if (!function_exists('rate_from_net_and_tax')) {
    /**
     * Calculate the tax rate from the net and tax values
     *
     * @param float $net
     * @param float $tax
     *
     * @return float
     */
    function rate_from_net_and_tax($net, $tax)
    {
        if ($net == 0 && $tax != 0) {
            return INF;
        }
        if ($net == 0 || $tax == 0) {
            return 0.0;
        }
        return 1 / ($net / $tax);
    }
}

if (!function_exists('tax_from_gross')) {
    /**
     * Calculate the tax value from the gross value
     *
     * @param float $gross
     * @param float $rate
     *
     * @return float
     */
    function tax_from_gross($gross, $rate = .2)
    {
        if ($rate == 0) {
            return 0.0;
        }
        return $gross / (1 + (1 / $rate));
    }
}

if (!function_exists('tax_from_net')) {
    /**
     * Calculate the tax value from the net value
     *
     * @param float $net
     * @param float $rate
     *
     * @return float
     */
    function tax_from_net($net, $rate = .2)
    {
        return $net * $rate;
    }
}
