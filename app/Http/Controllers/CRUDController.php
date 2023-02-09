<?php

namespace App\Http\Controllers;

use App\Models\DriverModel;
use App\Models\RouteHistoryModel;
use App\Models\TruckModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDController extends Controller
{
    
    
    public function index(){
        $routes = RouteHistoryModel::join('truck', 'truck.id', '=', 'routes_history.truck_id')
                                    ->join('driver', 'driver.id', '=', 'routes_history.driver_id')
                                    ->get([
                                        'routes_history.id',
                                        'routes_history.freight',
                                        'routes_history.freight_weight',
                                        'routes_history.route_price',
                                        'routes_history.from',
                                        'routes_history.to',
                                        'truck.brand',
                                        'truck.series',
                                        'driver.firstname',
                                        'driver.lastname',
                                        'driver.gender',
                                    ]);

       
        $price = RouteHistoryModel::all()->sum("route_price");
        $routesCount = RouteHistoryModel::all()->count();
        $driversCount = DriverModel::all()->where('status', '=', 'hired')->count();
        $trucksCount = TruckModel::all()->where('status', '=', 'serviceable')->count();

        return view('index', ['routes' => $routes, 'price' => $price, 'routesCount' => $routesCount, 'driversCount' => $driversCount, 'trucksCount' => $trucksCount]);
    }

    public function trucks(){
        $trucks = TruckModel::all()->where('status', '=', 'serviceable');
        $price = RouteHistoryModel::all()->sum("route_price");
        $routesCount = RouteHistoryModel::all()->count();
        $driversCount = DriverModel::all()->where('status', '=', 'hired')->count();
        $trucksCount = TruckModel::all()->where('status', '=', 'serviceable')->count();

        return view('trucks', ['trucks' => $trucks, 'price' => $price, 'routesCount' => $routesCount, 'driversCount' => $driversCount, 'trucksCount' => $trucksCount]);
    }
    
    public function addTruck(){
        return view('create-truck');
    }
    
    public function createTruck(Request $request){
        $form = $request->validate([
            'brand' => 'required',
            'series' => 'required',
        ]);

        TruckModel::create($form);
        return redirect('/trucks');
    }
    
    public function editTruck(TruckModel $truck){
        return view('edit-truck', ['truck' => $truck]);
    }
    
    public function updateTruck(Request $request, TruckModel $truck){
        $form = $request->validate([
            'brand' => 'required',
            'series' => 'required',
        ]);

        $truck->update($form);
        return redirect('/trucks');
    }
    
    public function deleteTruck(TruckModel $truck){
        $form = [
            'brand' => $truck['brand'],
            'series' => $truck['series'],
            'status' => 'decommissioned',
        ];

        $truck->update($form);
        return redirect('/trucks');
    }

    public function drivers(){
        $drivers = DriverModel::all()->where('status', '=', 'hired');
        $price = RouteHistoryModel::all()->sum("route_price");
        $routesCount = RouteHistoryModel::all()->count();
        $driversCount = DriverModel::all()->where('status', '=', 'hired')->count();
        $trucksCount = TruckModel::all()->where('status', '=', 'serviceable')->count();
        
        return view('drivers', ['drivers' => $drivers, 'price' => $price, 'routesCount' => $routesCount, 'driversCount' => $driversCount, 'trucksCount' => $trucksCount]);
    }
    
    public function addDriver(){
        return view('create-driver');
    }
    
    public function createDriver(Request $request){
        $form = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
        ]);

        DriverModel::create($form);
        return redirect('/drivers');
    }
    
    public function editDriver(DriverModel $driver){
        return view('edit-driver', ['driver' => $driver]);
    }
    
    public function updateDriver(Request $request, DriverModel $driver){
        $form = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
        ]);

        $driver->update($form);
        return redirect('/drivers');
    }
    
    public function deleteDriver(DriverModel $driver){
        $form = [
            'firstname' => $driver['firstname'],
            'lastname' => $driver['lastname'],
            'gender' => $driver['gender'],
            'status' => 'fired',
        ];

        $driver->update($form);
        return redirect('/drivers');
    }
    
    public function addRoute(){
        $trucks = TruckModel::all()->where('status', '=', 'serviceable');
        $deivers = DriverModel::all()->where('status', '=', 'hired');

        return view('create-route', ['trucks' => $trucks, 'drivers' => $deivers]);
    }
    
    public function createRoute(Request $request){
        $form = $request->validate([
            'truck_id' => 'required',
            'driver_id' => 'required',
            'freight' => 'required',
            'freight_weight' => 'required',
            'route_price' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        RouteHistoryModel::create($form);
        return redirect('/');
    }
}
