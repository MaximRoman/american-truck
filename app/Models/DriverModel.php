<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverModel extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'gender', 'status'];
    protected $table = 'driver';
}
