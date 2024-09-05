<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'age',
        'code_meli',
        'is_precedent',
        'type_sick',
        'phone',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
