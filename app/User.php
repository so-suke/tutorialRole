<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sayHello()
    {
        return $this->role;
    }

    public function getRoleName()
    {
        if ($this->role === 1) {
            $roleName = 'システム管理者';
        } elseif ($this->role > 0 && $this->role <= 5) {
            $roleName = '管理者';
        } else {
            $roleName = '一般ユーザー';
        }
        return $roleName;
    }
}
