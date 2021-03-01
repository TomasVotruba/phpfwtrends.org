<?php

declare(strict_types=1);

namespace TomasVotruba\PhpFwTrends\Twig;

use Nette\Utils\Strings;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class WebalizeTwigExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): iterable
    {
        yield new TwigFilter('webalize', fn (string $content): string => Strings::webalize($content));
    }
}
