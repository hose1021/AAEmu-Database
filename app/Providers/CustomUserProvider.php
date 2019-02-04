<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CustomUserProvider extends EloquentUserProvider {

    /**
    * Validate a user against the given credentials.
    *
    * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
    * @param  array  $credentials
    * @return bool
    */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password']; // will depend on the name of the input on the login form
        $hashedValue = $user->getAuthPassword();

        if ($this->hasher->needsRehash($hashedValue) && $hashedValue === base64_encode(hash('sha256', $plain, true))) {
            $user->password = bcrypt($plain);
            $user->save();
        }

        return $this->hasher->check($plain, $user->getAuthPassword());
    }

}