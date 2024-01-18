<?php

namespace App\Policies;

use App\Models\KaurKeungan;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class KaurKeunganPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, KaurKeungan $kaurKeungan): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, KaurKeungan $kaurKeungan): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, KaurKeungan $kaurKeungan): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, KaurKeungan $kaurKeungan): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, KaurKeungan $kaurKeungan): bool
    {
        //
    }
}
