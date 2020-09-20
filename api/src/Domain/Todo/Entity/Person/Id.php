<?php

declare(strict_types=1);

namespace Domain\Todo\Entity\Person;

use Ramsey\Uuid\Uuid;
use Webmozart\Assert\Assert;

final class Id
{
    private string $value;

    /**
     * Id constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::notEmpty($value, 'Person id required');
        Assert::string($value, 'Person id must be string');
        Assert::uuid($value, 'Person id must be uuid');
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    public static function uuid4(): self
    {
        return new self(Uuid::uuid4()->toString());
    }

    public function isEqual(Id $id): bool
    {
        return $this->value === $id->getValue();
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
