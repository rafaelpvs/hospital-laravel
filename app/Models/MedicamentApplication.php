<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentApplication extends Model
{
    use HasFactory;


    protected $table = 'medicament-applications';


    public function medicament() {
        return $this->belongsTo(Medicament::class);
    }
    public function doctorRecieper() {
        return $this->belongsTo(User::class, 'doctor_recieper');
    }

    public function nurseApplicator() {
        return $this->belongsTo(User::class, 'nurse_id');
    }
}
