@extends('layouts.layout')

@section('title', 'Driver Add')
    
@section('main')
    <div class="main-content">
        <h1>Add Driver:</h1>
        <form action="/drivers" method="POST">
            @csrf
            <div class="form-item">
                <label for="firstname" >Firstname:</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-item">
                <label for="lastname" >Lastname:</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="form-item">
                <label for="gender" >Gender:</label>
                <select name="gender" id="gender">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <button class="btn" type="submit">Add Driver</button>
        </form>
    </div>
@endsection