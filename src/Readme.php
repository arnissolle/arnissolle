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
            Ahoy, World! 👋

            👨🏻‍🌾 I'm Pierre Arnissolle, Backend Engineer at Yousign (soon-to-be Youtrust).

            🪴 I plan to update [my website]({$this->website}) one day...
            
            🌐 After which, it will become my main/preffered online presence and will be ActivityPub-compliant.
            
            💼 In the meantime, I'm only maintaining [my LinkedIn profile]({$this->linkedin}).
            MARKDOWN;
    }
};
