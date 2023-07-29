```php
<?php

echo new class
{
    public function __construct(
        private readonly string $username = "arnissolle",
        private readonly string $fullName = "Pierre Arnissolle",
        private readonly string $jobTitle = "Backend Developer",
        private readonly string $portfolioUrl = "https://arnissolle.com",
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
};
```
