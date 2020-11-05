<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = false;

    public function users()
    {
        $this->hasMany(User::class);
    }
}
