<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function before(User $user, $ability){

        if($user->isAdmin()){
            return true;
        }
    }

    /**
     * @param User $authUser
     * @param User $user
     * @return bool
     */
    public function edit(User $authUser, User $user){
        return $authUser->id === $user->id;
    }

    /**
     * @param User $authUser
     * @param User $user
     * @return bool
     */
    public function update(User $authUser, User $user){
        return $authUser->id === $user->id;
    }

    /**
     * @param User $authUser
     * @param User $user
     * @return bool
     */
    public function destroy(User $authUser, User $user){
        return $authUser->id === $user->id;
    }
}
