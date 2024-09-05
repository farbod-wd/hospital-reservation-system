<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'patient_id',
        'name',
        'special_field',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
