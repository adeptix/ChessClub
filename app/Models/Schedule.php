<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    protected $fillable = [
        'address', 'time', 'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
