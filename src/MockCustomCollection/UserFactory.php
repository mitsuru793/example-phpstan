<?php
declare(strict_types=1);

namespace Php\MockCustomCollection;

final class UserFactory
{
    public function createMany(): Users
    {
        return new Users();
    }
}