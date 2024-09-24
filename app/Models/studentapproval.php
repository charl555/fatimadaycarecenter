<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentapproval extends Model
{
    use HasFactory;

    protected $table = 'studentapproval';

    protected $fillable = [
        'Record_ID',
        'Approval_Date',
    ];


}
