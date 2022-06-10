```php
<?php #8.1-cli

class Arnissolle
{
    public function __construct(
        private readonly string $username = "arnissolle",
        private readonly string $fullName = "Pierre Arnissolle",
        private readonly string $jobTitle = "Backend Developer",
        private readonly string $portfolioUrl = "https://arnissolle.com",
    ) {}

    public function __toString(): string
    {
        $ahoy = <<<AHOY
            Ahoy, World! 👋
            I'm {$this->fullName}, {$this->jobTitle}.

            Check my portfolio at {$this->portfolioUrl}
            Or my LinkedIn profile at https://linkedin.com/in/{$this->username}
            AHOY;

        return PHP_EOL . $ahoy . PHP_EOL;
    }
}

die(new Arnissolle);
```
