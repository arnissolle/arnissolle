```php
<?php

echo new class
{
    private string $username = "arnissolle";
    private string $fullName = "Pierre Arnissolle";
    private string $jobTitle = "Backend Developer @ Yousign";
    private string $website = "https://arnissolle.com";

    public function __toString(): string
    {
        return <<<AHOY
            Ahoy, World! 👋

            I'm {$this->fullName}, {$this->jobTitle}.

            Check [my website]({$this->website}), or [connect with me](https://linkedin.com/in/{$this->username}) on LinkedIn.
            AHOY;
    }
};
```
