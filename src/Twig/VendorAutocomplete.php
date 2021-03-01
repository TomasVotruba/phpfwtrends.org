<?php

declare(strict_types=1);

namespace TomasVotruba\PhpFwTrends\Twig;

final class VendorAutocomplete
{
    public string $vendorName;

    public float $lastYearTrend;

    public int $vendorTotalLastYear;

    public int $vendorTotalPreviousYear;

    /**
     * @var PackageAutocomplete[]
     */
    public array $packagesData = [];
}
