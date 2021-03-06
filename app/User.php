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
    protected $fillable = [
        'name', 'email', 'password'//, 'role_id'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * public function role(){
     * return $this->belongsTo(Role::class);
     * }*/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'assigned_roles'); //This second name is because the table name is not role_user
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasRoles(array $roles)
    {
        return (bool) $this->roles->pluck('name')->intersect($roles)->count();
    }

    /**
     * @return bool
     */
    public function isAdmin(){
        return $this->hasRoles(['admin']);
    }
}
