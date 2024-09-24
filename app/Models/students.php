<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class students extends Model
{
    use HasFactory;


    // Specify the table associated with the model
    protected $table = 'students';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Middle_Initial',
        'Nickname',
        'Sex',
        'BirthOrder',
        'NoOfSiblings',
        'DateOfBirth',
        'BirthPlace',
        'BirthRegistered',
        'Region',
        'Province',
        'City',
        'Barangay',
        'NoOfStreetAd',
        'Religion',
        'Ethnicity',
        'Dropped',
        'Approved',
    ];

   



}
 