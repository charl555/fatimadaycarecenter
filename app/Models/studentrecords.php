<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentrecords extends Model
{
    use HasFactory;


    protected $table = 'studentrecords';

    protected $fillable = [
        'Student_ID',
        'Enrollment_Date',
        'Report_Generated',
    ];

}
