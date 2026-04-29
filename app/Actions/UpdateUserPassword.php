<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\User;
use SensitiveParameter;

final readonly class UpdateUserPassword
{
    public function __invoke(User $user, #[SensitiveParameter] string $password): void
    {
        $user->update([
            'password' => $password,
        ]);
    }
}
