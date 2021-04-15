<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpf',
        'rg',
        'birthdate',
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
