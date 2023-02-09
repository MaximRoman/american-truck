@extends('layouts.layout')

@section('title', 'Trucks List')
    
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

                    <a class="btn" href="/create-truck">Add Truck</a>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Truck</th>
                                <th>Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trucks as $item)
                                <tr class="tr" >
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['brand'] }} {{ $item['series'] }}</td>      
                                    <td>
                                        <a class="btn" href="/edit-truck/{{$item['id']}}"><i class="fa-solid fa-pen-to-square"></i></a>  
                                        <a class="btn" href="/delete-truck/{{$item['id']}}"><i class="fa-solid fa-trash-can"></i></a>
                                    </td> 
                                </tr>
                            @endforeach
                            @for ($i = 0; $i < 20; $i++)
                                <tr >
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

@section('home', ' ')
@section('trucks', 'active')
@section('drivers', ' ')