<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function beds() {
        return $this->belongsToMany(Bed::class);
    }

    public function internments() {
        $this->hasMany(Internment::class);
    }
}
