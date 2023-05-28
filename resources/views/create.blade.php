{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>

        <form action="{{ route('students.storefront') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter student name">
            </div>

            <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="number" name="grade" id="grade" class="form-control" placeholder="Enter student grade">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection --}}
@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%">
        <div class="card">
            <div class="card-header">
                <h1>Create Student</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('students.storefront') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter student name">
                    </div>

                    <div class="form-group">
                        <label for="grade">Grade:</label>
                        <input type="number" name="grade" id="grade" class="form-control" placeholder="Enter student grade">
                    </div>

                    <button class="btn btn-primary mt-2" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
