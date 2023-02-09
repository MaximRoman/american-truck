@extends('layouts.layout')

@section('title', 'Home')
    
@section('main')
    <div class="inner-main">
        <div class="main-content">
            <div class="inner-main-content">
                <div class="statistic-container">
                    <div class="statistic">
                        <h1>All Statistc:</h1>
                        <div class="statistic-item">
                            <h3 class="hitem">Total Trucks: <span>{{ $trucksCount}}</span></h3>
                            <h3 class="hitem">Total Drivers: <span>{{ $driversCount}}</span></h3>
                            <h3 class="hitem">Total Routes: <span>{{ $routesCount}}</span></h3>
                            <h3 class="hitem">Total Routes Price: <span>${{ $price}}</span></h3>
                        </div>
                    </div>
                    <a class="btn" href="/create-route">Add Route</a>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Freight</th>
                                <th>Weight (t)</th>
                                <th>Price ($)</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Truck</th>
                                <th>Driver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($routes as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['freight'] }}</td>
                                    <td>{{ $item['freight_weight'] / 1000 }}</td>
                                    <td>{{ $item['route_price'] }}</td>
                                    <td>{{ $item['from'] }}</td>
                                    <td>{{ $item['to'] }}</td>
                                    <td>{{ $item['brand'] }} {{ $item['series'] }}</td>
                                    <td>{{ $item['firstname'] }} {{ $item['lastname'] }}</td>         
                                </tr>
                            @endforeach
                            @for ($i = 0; $i < 20; $i++)
                                <tr col>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('home', 'active')
@section('trucks', ' ')
@section('drivers', ' ')