@extends('layout')

@section('content')
<div>
    <h1 align='center'><u>User Login Page</u></h1>
    <div class="col-sm-8 offset-2">
        <form action="{{ route('login') }}" method="post" class="card-body">
            @csrf
           
    
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Enter Email" aria-describedby="helpId">
            </div>

            
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="enter password" id="" class="form-control">
            </div>
            <button type="submit"  class="btn btn-success mt-3">Login</button>
        </form>
    </div>
</div>
@endsection