@extends('navbar')
@section('main')
<div class="row">
    <div class="col-md-6 mx-auto">
    <form action="{{url('updatepass')}}" method="post">
    @csrf
       <input type="text" hidden class="form-control" name="id" value="{{$data->id}}">
       <input type="password" class="form-control" name="password">
       <input type="text" class="form-control" >
       <input type="submit" class="btn btn-success" value="UPDATE" >
    </form>
    </div>
</div>
@endsection()