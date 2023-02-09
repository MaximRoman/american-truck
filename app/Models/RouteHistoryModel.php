<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteHistoryModel extends Model
{
    use HasFactory;
    protected $fillable = ['truck_id', 'driver_id', 'freight', 'freight_weight', 'route_price', 'from', 'to'];
    protected $table = 'routes_history';
}
