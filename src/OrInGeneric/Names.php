<?php
declare(strict_types=1);

namespace Php\OrInGeneric;

/**
 * @implements \IteratorAggregate<int, string|int>
 */
final class Names implements \IteratorAggregate
{
    /**
     * @return \ArrayIterator<int, string|int>
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator();
    }
}