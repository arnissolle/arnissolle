```php
<?php

readonly class Arnissolle
{
    public function __construct(
        private string $username = "arnissolle",
        private string $fullName = "Pierre Arnissolle",
        private string $jobTitle = "Backend Developer",
        private string $portfolioUrl = "https://arnissolle.com",
    ) {}

    public function __toString(): string
    {
        return <<<AHOY
            Ahoy, World! 👋
            
            I'm {$this->fullName}, {$this->jobTitle}.

            Check my portfolio at {$this->portfolioUrl}
            Or my LinkedIn profile at https://linkedin.com/in/{$this->username}
            AHOY;
    }
}

echo new Arnissolle;
```
