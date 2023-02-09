@extends('layouts.layout')

@section('title', 'Truck Add')
    
@section('main')
    <div class="main-content">
        <h1>Add Truck:</h1>
        <form action="/trucks" method="POST">
            @csrf
            <div class="form-item">
                <label for="brand">Brand:</label>    
                <input type="text" name="brand" id="brand">
            </div>
            <div class="form-item">
                <label for="series">Series:</label>    
                <input type="text" name="series" id="series">
            </div>
            <button class="btn" type="submit">Add Truck</button>
        </form>
    </div>
@endsection