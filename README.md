```php
<?php

echo new class
{
    private string $fullName = "Pierre Arnissolle";
    private string $jobTitle = "Backend Developer @ Yousign";
    private string $website = "https://arnissolle.com";
    private string $linkedin = "https://linkedin.com/in/arnissolle";

    public function __toString(): string
    {
        return <<<MARKDOWN
            Ahoy, World! 👋

            I'm {$this->fullName}, {$this->jobTitle}.

            Check [my website]({$this->website}), or [connect with me]({$this->linkedin}) on LinkedIn.
            MARKDOWN;
    }
};
```

Result for `PHP 8.3.3`:
> Ahoy, World! 👋
>
> I'm Pierre Arnissolle, Backend Developer @ Yousign.
>
> Check [my website](https://arnissolle.com), or [connect with me](https://linkedin.com/in/arnissolle) on LinkedIn.
