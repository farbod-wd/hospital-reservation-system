<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
   protected $fillable = [
      'patient_name',
      'doctor_name',
      'patient_age',
      'is_precident',
      'type_sick',
      'status',
      'date',
   ];




}
