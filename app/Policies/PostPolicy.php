<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Post $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        return $post->owner_id == $user->id && $user->role_id == 1;
    }
}
