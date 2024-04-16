<?php

declare(strict_types=1);

namespace Arnissolle\Arnissolle;

final readonly class Readme
{
    private function __construct(
        private string $fullName = "Pierre Arnissolle",
        private string $jobTitle = "Backend Developer at Yousign",
        private string $website = "https://pierre.arnissolle.com?utm_source=github&utm_medium=social",
        private string $linkedin = "https://linkedin.com/in/arnissolle",
    )
    {
    }

    public static function generate(): string
    {
        $self = new static;
        return <<<MARKDOWN
            Ahoy, World! 👋

            I'm {$self->fullName}, {$self->jobTitle}.

            🫵 You can [check my website]({$self->website}) if you want learn more about me.
            
            Feel free to [connect with me]({$self->linkedin}) on LinkedIn 🤝
            MARKDOWN;
    }
};