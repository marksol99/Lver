<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';

    protected $fillable = [
        "personalId",
        "firstName",
        "lastName",
        "dob",
        "phonenumber",
        "gender",
        "email",
        "address",
        "postCode",
        "place",
    ];
    public $timestamps = false;
}
