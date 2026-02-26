<?php

declare(strict_types=1);

namespace Arnissolle\Arnissolle;

final class Readme
{
    private string $website = 'https://pierre.arnissolle.com?utm_source=github&utm_medium=social';

    private string $linkedin = 'https://linkedin.com/in/arnissolle';

    public static function generate(): string
    {
        $self = new static();

        return <<<'MARKDOWN'
            Ahoy, World! 👋

            I'm Pierre Arnissolle, Backend Engineer at Yousign (soon-to-be Youtrust).

            🪴 I plan to update [my website]({$self->website}) one day...
            🌐 After which, it will become my main/preffered online presence and will be ActivityPub-compliant.
            💼 In the meantime, I'm only maintaining [my LinkedIn profile]({$self->linkedin}).
            MARKDOWN;
    }
};
