<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public static function saveSalesforceUser($salesforceUser)
    {
        return static::updateOrCreate(
            [
            'name' => $salesforceUser->name,
            'email' => $salesforceUser->email,
            'salesforce_user_id' => $salesforceUser->id
            ],
            ['refresh_token' => $salesforceUser->refreshToken]
        );
    }
}
