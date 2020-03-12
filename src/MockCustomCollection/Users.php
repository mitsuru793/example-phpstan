<?php
declare(strict_types=1);

namespace Php\MockCustomCollection;

use Tightenco\Collect\Support\Collection;

/**
 * @extends Collection<User>;
 */
final class Users extends Collection
{
    /** @var User[] */
    protected $items;
}
