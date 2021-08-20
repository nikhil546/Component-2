@extends('layouts.app')
@section('mybook')
<div class="col-4 card p4">
    <h1>CD</h1>
    <form action="{{url ('update/'. $cdproduct->getId()) }}" method="POST"  >
        @csrf
        <div class="form">
       
            <input type="text" class="form-control mb-2" value="{{$cdproduct->getTitle()}}" name="title">
            <input type="text" class="form-control mb-2 " value="{{$cdproduct-> getFirstName()}}" name="fname">
            <input type="text" class="form-control mb-2" value="{{$cdproduct-> getMainName()}}" name="sname">
            <input type="text" class="form-control mb-2" value="{{$cdproduct-> getprice()}}" name="price">
            <input type="text" class="form-control mb-2" value="{{$cdproduct-> getPlaylength()}}" name="playpg">
            
        </div>
        <button type="submit" class="btn btn-dark  mb-2 float-right text-light">UPDATE</button>
        <a href="{{url ('delete/'. $cdproduct->getId()) }}"><button type="button" class="btn btn-dark  mb-2 float-left text-light">DELETE</button></a>

    </form>
</div>
@endsection