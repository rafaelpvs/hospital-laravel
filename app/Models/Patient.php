<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function age() {
        $age = Carbon::parse($this->birthdate);
        return $age->diff(Carbon::now())->format('%y years');
    }

    public function phones() {
        return $this->hasMany(Phone::class);
    }

    public function addresss() {
        return $this->hasMany(Address::class);
    }

    public function beds() {
        return $this->belongsToMany(Bed::class);
    }

    public function internments() {
        $this->hasMany(Internment::class);
    }
}
