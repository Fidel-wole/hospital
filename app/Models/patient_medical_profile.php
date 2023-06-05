<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_medical_profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'patient_id',
        'hereditary',
        'genotype',
        'blood_group',
        'height',
        'weight',
        'allergies'
    ];
    public function profile(){
        return $this->belongsTo(patient::class, 'patient_id', 'patient_id');

    }
}
