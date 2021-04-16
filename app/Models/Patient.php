<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'cpf',
        'rg',
        'birthdate',
    ];
    public function age() {
        $age = Carbon::parse($this->birthdate);
        return $age->diff(Carbon::now())->format('%y years');
    }

    public function phones() {
        return $this->hasMany(Phone::class);
    }

    public function address() {
        return $this->hasOne(Address::class);
    }

    public function beds() {
        return $this->belongsToMany(Bed::class);
    }

    public function internments() {
        return $this->hasMany(Internment::class);
    }
    public function currentInternment() {
        return $this->internments->last();
    }
    public function isInterned() {
        return $this->internments->contains('departure_time','==', null);
    }
}
