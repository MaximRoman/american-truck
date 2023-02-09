@extends('layouts.layout')

@section('title', 'Drivers List')
    
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
                    <a class="btn" href="/create-driver">Add Driver</a>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drivers as $item)
                                <tr class="tr">
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['firstname'] }} {{ $item['lastname'] }}</td>    
                                    <td>
                                        @if ($item['gender'] === 'M')
                                            <i class="fa-solid fa-mars"></i>        
                                        @else
                                            <i class="fa-solid fa-venus"></i>
                                        @endif
                                    </td>      
                                    <td>
                                        <a class="btn" href="/edit-driver/{{$item['id']}}"><i class="fa-solid fa-pen-to-square"></i></a>  
                                        <a class="btn" href="/delete-driver/{{$item['id']}}"><i class="fa-solid fa-trash-can"></i></a>
                                    </td> 
                                </tr>
                            @endforeach
                            @for ($i = 0; $i < 20; $i++)
                                <tr col>
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

@section('home', ' ')
@section('trucks', ' ')
@section('drivers', 'active')