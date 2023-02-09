@extends('layouts.layout')

@section('title', 'Add route histori')
    
@section('main')
    <div class="main-content">
        <h1>Add Route:</h1>
        <form action="/" method="POST">
            @csrf
            <div class="form-item">
                <label for="truck_id">Truck:</label>
                <select name="truck_id" id="truck_id">
                    @foreach ($trucks as $item)
                        <option value={{ $item['id'] }}>{{ $item['brand'] }} {{ $item['series'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-item">
                <label for="driver_id">Driver:</label>
                <select name="driver_id">
                    @foreach ($drivers as $item)
                        <option value={{ $item['id'] }}>{{ $item['firstname'] }} {{ $item['lastname'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-item">
                <label for="freight">Freight:</label>
                <input type="text" name="freight" id="freight">
            </div>
            <div class="form-item">
                <label for="freight_weight">Freight Weight ( kg ):</label>
                <input type="number" name="freight_weight" id="freight_weight">
            </div>
            <div class="form-item">
                <label for="route_price">Route Price ( $ ):</label>
                <input type="number" name="route_price" id="route_price">
            </div>
            <div class="form-item">
                <label for="from">From:</label>
                <input type="text" name="from" id="from">
            </div>
            <div class="form-item">
                <label for="to">To:</label>
                <input type="text" name="to" id="to">
            </div>
            <button class="btn" type="submit">Add Route</button>
        </form>
    </div>
@endsection