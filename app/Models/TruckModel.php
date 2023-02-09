<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckModel extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'series', 'status'];
    protected $table = 'truck';
}
