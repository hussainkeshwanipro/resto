@extends('layout')

@section('content')
<div>
    <h1 align='center'><u>Add Resto Form</u></h1>
    <div class="col-sm-8 offset-2">
        <form action="{{ route('add') }}" method="post" class="card-body">
            @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="Enter Name" aria-describedby="helpId">
            </div>
    
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Enter Email" aria-describedby="helpId">
            </div>
    
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="Enter Address" aria-describedby="helpId">
            </div>
            <button type="submit"  class="btn btn-success mt-3">Submit</button>
        </form>
    </div>
</div>
@endsection