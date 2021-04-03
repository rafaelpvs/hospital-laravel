<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $fillable = [
        'codename'
    ];
    public function user() {
        return $this->morphOne(User::class, 'userable');
    }
}
