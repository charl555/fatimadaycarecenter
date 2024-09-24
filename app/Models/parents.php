<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;
   
     // Specify the table associated with the model
     protected $table = 'parents';

     // Specify the fields that are mass assignable
     protected $fillable = [
         'Student_ID',
         'First_Name',
         'Last_Name',
         'Middle_Initial',
         'Contact_Number',
         'Email',
         
     ];
}
