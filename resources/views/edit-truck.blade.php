@extends('layouts.layout')

@section('title', 'Truck Edit')
    
@section('main')
    <div class="main-content">
        <h1>Edit Truck:</h1>
        <form method="POST" action="/trucks/{{$truck -> id}}">
            @csrf
            @method('PUT')
            <div class="form-item">
                <label for="brand">Brand:</label>    
                <input type="text" name="brand" id="brand" value={{ $truck['brand'] }}>
            </div>
            <div class="form-item">
                <label for="series">Series:</label>    
                <input type="text" name="series" id="series" value={{ $truck['brand'] }}>
            </div>
            <button class="btn" type="submit">Edit Truck</button>
        </form>
    </div>
@endsection