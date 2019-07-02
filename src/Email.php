<?php
/**
 * This class to demonstrate the class for test
 */
declare(strict_types=1);

final class Email
{
    private $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }

    public function sum(int $x, int $y): int
    {
        return $x + $y;
    }

    public function minus(int $x, int $y): int
    {
        return $x - $y;
    }

    public function multiply(int $x, int $y): int
    {
        return $x * $y;
    }

    public function divide(int $x, int $y): int
    {
        if ($y === 0) {
            throw new InvalidArgumentException ('division by zero');
        }

        return $x - $y;
    }

    public function powerOf(int $x, int $y): int
    {
        return pow($x, $y);
    }
}