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
        return <<<AHOY
            Ahoy, World! 👋

            I'm {$this->fullName}, {$this->jobTitle}.

            Check [my website]({$this->website}), or [connect with me]({$this->linkedin}) on LinkedIn.
            AHOY;
    }
};
```
