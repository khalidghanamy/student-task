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
    <div class="container w-75 ">
        <div class="row justify-content-center">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    </div>

@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('myChart').
        getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($students->pluck('name')) !!},
                datasets: [{
                    label: 'Student Grade',
                    data: {!! json_encode($students->pluck('grade')) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                 scales: {
        y: {
          beginAtZero: true
        }
      }
            },
        });
        });
        // setInterval(() => {
        //   const ctx = document.getElementById('myChart').
        // getContext('2d');

        // new Chart(ctx, {
        //     type: 'bar',
        //     data: {
        //         labels: {!! json_encode($students->pluck('name')) !!},
        //         datasets: [{
        //             label: 'Student Grade',
        //             data: {!! json_encode($students->pluck('grade')) !!},
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         animation: false,
        //         plugins: {
        //             legend: {
        //                 display: false
        //             },
        //             tooltip: {
        //                 enabled: false
        //             }
        //         }
        //     },
        // });

        // },300);
    </script>
@endpush
