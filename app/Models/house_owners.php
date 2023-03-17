<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house_owners extends Model
{
    // write primarykey variable
    protected $primaryKey = 'id';
    // write fillable array
    protected $fillable = ['owner_name', 'father_name', 'cnic', 'address', 'phone_number', 'email', 'password', 'user_id'];
    // write guarded array
    protected $guarded = [];
    // write timestamps variable
    public $timestamps = true;
    // write table variable
    protected $table = 'house_owners';
    use HasFactory;
}
