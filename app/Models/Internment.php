<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internment extends Model
{
    use HasFactory;
    protected $fillable  = [
        'disease',
    ];

    public function apartments() {
        return $this->belongsToMany(Apartment::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    public function medicamentApplications() {
        return $this->hasMany(MedicamentApplication::class);
    }
}
