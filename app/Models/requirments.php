<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirments extends Model
{
    use HasFactory;
    public function requirments()
    {
        return $this->belongsTo(requirments::class, 'Student_ID', 'id');
    }
    protected $table = 'requirments';

    protected $fillable = [
        'Student_ID',
        'PSABirthCertificate',
        'ValidID',
        'HealthCard',
        'Assessment',
        'SignedDocuments',
    ];

}
