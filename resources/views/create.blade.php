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
                        {{-- must not be empty
                             --}}
                        <input type="text"

                        name="name" id="name" class="form-control" placeholder="Enter student name">
                    </div>

                    <div class="form-group">
                        <label for="grade">Grade:</label>
                        {{-- add limit --}}
                        <input type="number"
                            max="100"
                            min="0"

                         name="grade" id="grade" class="form-control" placeholder="Enter student grade">
                    </div>

                    <button class="btn btn-primary mt-2" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
              <div id="result-message"></div>
    </div>
@endsection

{{-- push js script to validate form --}}

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const name = document.getElementById('name');
            const grade = document.getElementById('grade');

            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                if (name.value === '' || grade.value === '') {
                    event.preventDefault();
                    document.getElementById('result-message').innerHTML = 'Please fill all the fields';
                    // use bootstarp warning
                    document.getElementById('result-message').classList.add('alert', 'alert-danger');

                }
            });

        });
    </script>
