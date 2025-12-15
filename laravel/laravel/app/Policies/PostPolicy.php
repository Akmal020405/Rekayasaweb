<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    // Siapa yang boleh update post
    public function update(User $user, Post $post)
    {
        // Admin atau pemilik post
        return $user->is_admin || $user->id === $post->user_id;
    }

    // Siapa yang boleh delete post
    public function delete(User $user, Post $post)
    {
        return $user->is_admin || $user->id === $post->user_id;
    }
}
