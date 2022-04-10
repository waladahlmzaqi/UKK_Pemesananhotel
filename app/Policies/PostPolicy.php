<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Admin;
use App\Models\Resepsionis;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
