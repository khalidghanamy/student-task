<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class=" mt-4 mb-2">
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
                </div>
                <div class="card">

                    <div class="card-header">Student Data</div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button to redirect to student storefront -->
    <canvas id="studentChart" width="400" height="400"></canvas>
    @endsection



@section('scripts')
   {{-- use scriot here for charts --}}
@endsection
