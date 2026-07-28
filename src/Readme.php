<?php

declare(strict_types=1);

namespace Arnissolle\Pierre;

final readonly class Readme
{
    public function __construct(
        private string $website = 'https://pierre.arnissolle.com?utm_source=github&utm_medium=social',
        private string $linkedin = 'https://linkedin.com/in/arnissolle',
    ) {
    }

    public function __toString(): string
    {
        return <<<MARKDOWN
            <!-- This file is auto-generated. Do not edit directly. -->

            Ahoy, World! 👋

            👨🏻‍🌾 I'm Pierre Arnissolle, Backend Engineer at Youtrust.

            🪴 Yes, I plan to update [my website]({$this->website}) one day...
            MARKDOWN;
    }
};
