@extends('layouts.app')
@section('mybook')
<div class="col-4 p-4">
    <div class="card">
        <h1>Book</h1>
    <form action="{{url ('update/'. $bookproduct->getId()) }}" method="POST"  >
            @csrf
            <div class="form-row">

                <input type="text" class="form-control mb-2" value="{{$bookproduct -> getTitle()}}" name="title">
                <input type="text" class="form-control mb-2" value="{{$bookproduct -> getFirstName()}}" name="fname">
                <input type="text" class="form-control mb-2" value="{{$bookproduct -> getMainName()}}" name="sname">
                <input type="text" class="form-control mb-2" value="{{$bookproduct -> getprice()}}" name="price">
                <input type="text" class="form-control mb-2" value="{{$bookproduct -> getNumberOfPages()}}" name="playpg">
               
            </div>
            <button type="submit" class="btn btn-dark  mb-2 float-right text-light">UPDATE</button>
            <a href="{{url ('delete/'. $bookproduct->getId()) }}"><button type="button" class="btn btn-dark  mb-2 float-left text-light">DELETE</button></a>
        </form>
    </div>
</div>

@endsection