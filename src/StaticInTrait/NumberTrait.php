<?php
declare(strict_types=1);

namespace Php\StaticInTrait;

trait NumberTrait
{
    /** @var int */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function of(int $value): self
    {
        return new self($value);
    }

    /**
     * @return self[]
     */
    public static function range(int $start, int $end, int $step = 1): array
    {
        $values = [];
        for ($i = $start; $i <= $end;  $i += $step) {
            $values[] = static::of($i);
        }
        return $values;
    }
}