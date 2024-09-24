<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirmation extends Model
{
    use HasFactory;
    protected $table = 'confirmation';

    protected $fillable = [
        'Student_ID',
        'Parent_ID',
        'Confirmation_Date',
        'Status',
    ];

}
