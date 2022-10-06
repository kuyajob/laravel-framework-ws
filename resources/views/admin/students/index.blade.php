@extends('layouts.app')
@section('content')
    <div class="container">
        <p>This is students page</p>
        <div class="">

            <a href="{{ url('/admin/students/create') }}" class="btn btn-secondary mb-3 ">Create</a>
        </div>
        <table class="table table-hover table-bordered">
            <thread>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Birdate</th>
                    <th>Created At</th>
                </tr>
            </thread>
            <tbody>
                @foreach(\App\Models\Student::all() as $key => $student)
                <tr>
                    <td>{{ $key+=1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        

    </div>


@stop
