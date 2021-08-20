@extends('layouts.app')

@section('index')
<div class="col-sm bg-light mx-2">
    <h1>Books</h1>

    @foreach ($books as $product)
    <div class="card my-2 ">
        <ul>
            <li class="font-weight-bold"> {{$product -> getTitle()}}</li>
            <li> {{$product -> getFullName()}} </li>
            <li> £ {{$product -> getprice()}} </li>
            <li>Number of pages:{{$product-> getNumberOfPages()}}</li>
        <li>
        <a href="{{url ('edit/'. $product->getId()) }}"> <button type="button"
                class="btn btn-dark  mb-2 float-right text-light">Select</button></a>
            </li>
            </ul>
            </div>
    @endforeach
</div>

<div class="col-sm bg-light mx-2 ">
    <h1>CDs</h1>

    @foreach ($cds as $product)
    <div class="card my-2">
        <ul>
            <li class="font-weight-bold"> {{$product -> getTitle()}}</li>
            <li> {{$product -> getFullName()}} </li>
            <li> £ {{$product -> getprice()}} </li>
            <li>Playlength:{{$product-> getPlayLength()}}</li>
        </ul>
        <a href="{{url ('edit/'. $product->getId()) }}"> <button type="button"
                class="btn btn-dark  mb-2 float-right text-light">Select</button></a>
    </div>
    @endforeach
</div>

<div class="col-sm bg-light mx-2">
    <h1>Create</h1>

   
        <form action="/create" method='post' value="">
            @csrf
            <label for="producttype">Product Type:</label>
            <select id="id" name="type">
                <option value="book">Book</option>
                <option value="cd">CD</option>
            </select>
            <div class="form">
                <input type="text" class="form-control mb-2" placeholder="Title" name="title">
                <input type="text" class="form-control mb-2 " placeholder="Firstname (optional)" name="firstname">
                <input type="text" class="form-control mb-2" placeholder="Surname/band" name="surname">
                <input type="text" class="form-control mb-2" placeholder="Price" name="price">
                <input type="text" class="form-control mb-2" placeholder="Pages/Playlength" name="playpg">
                    <br>
                <button type="submit" class="btn btn-dark  mb-2 float-right text-light">Add New</button>
            </div>
        </form>
 
</div>
@endsection