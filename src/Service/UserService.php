<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Service;

class UserService
{
    /**
     * @return array<string, mixed>|null
     */
    public function getUserById(int $id): ?array
    {
        return null;
    }

    /**
     * @param array<string, mixed> $data
     */
    public function saveUser(array $data): bool
    {
        return true;
    }
}
