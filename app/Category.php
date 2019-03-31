

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 1;
    const DEFAULT_TYPE = 0;

    /**
     * The attributes that are
      mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','','description','image_name', 'email', 'password',
    ];

    
