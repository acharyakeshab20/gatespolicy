<?php

namespace App\Policies;

use App\Models\User;
use App\Models\post;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class postpolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, post $post)
    {
        return $user->id == $post->users_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, post $post)
    {
//        if (Auth::user()->roles == '0'){
//
//        }else{
//
//        }
//        if ($user->roles=='0' && $user->id == $post->users_id){
//            return "yes";
//
//        }
        return $user->id == $post->users_id;

//        if ($user->roles = '0'){
//            return $user->id == $post->users_id;
//        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\post  $post
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, post $post)
    {
        //
    }
}
