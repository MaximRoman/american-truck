@extends('layouts.layout')

@section('title', 'Driver Edit')
    
@section('main')
    <div class="main-content">
        <h1>Edit Driver:</h1>
        <form method="POST" action="/drivers/{{$driver -> id}}">
            @csrf
            @method('PUT')
            <div class="form-item">
                <label for="firstname" >Firstname:</label>
                <input type="text" name="firstname" id="firstname" value={{ $driver['firstname'] }}>
            </div>
            <div class="form-item">
                <label for="lastname" >Lastname:</label>
                <input type="text" name="lastname" id="lastname" value={{ $driver['lastname'] }}>
            </div>
            <div class="form-item">
                <label for="gender" >Gender:</label>
                <select name="gender" id="gender">
                    <option value="M" @if ($driver['gender'] === 'M')
                            selected
                        @endif>M</option>
                    <option value="F" @if ($driver['gender'] === 'F')
                            selected
                        @endif>F</option>
                </select>
            </div>
            <button class="btn" type="submit">Edit Driver</button>
        </form>
    </div>
@endsection