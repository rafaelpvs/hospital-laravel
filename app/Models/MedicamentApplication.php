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
}
