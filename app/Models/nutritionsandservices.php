<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nutritionsandservices extends Model
{
    use HasFactory;
    protected $table = 'nutritionsandservices';

    protected $fillable = [
        'Student_ID',
        'BreastFeeding',
        'SupplementalFeeding',
        'Disability',
        'DisabilityAssistance',
        'ListahanIdentified',
        'PantawidBeneficiary',
        'ECCDExperience',
    ];

}
