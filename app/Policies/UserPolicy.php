<?php

namespace App\Policies;

use App\Models\User;
use App\Models\users;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->rol_id == 2;
    }

}
