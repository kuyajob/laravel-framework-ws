@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Create Students</h4>

            <div class="row justify-items-center">
                <div class="col-md-5 ">
<div class="card">
     <div class="card-body">

        @if(session('message')!=null)
        <div class="alert alert-info">{{ session('message') }}</div>
        @endif
      <form action='{{ url('admin/students/store') }}' method='post'>
                @csrf
        <input type="text"  name='name' class="form-control mb-3" placeholder= 'Name'>
        @error('name')
            {{ $message }}
        @enderror
        <input type="date" name='birthdate' class="form-control mb-3" placeholder="">
        <input type="email" name='email' class="form-control mb-3" placeholder="Email">
        <input type="text" name='address' class="form-control mb-3" placeholder="Address">
        <button type="submit" class="btn btn-success">Submit</button>

      </form>

    </div>
</div>

                </div>
            </div>
    </div>
@stop