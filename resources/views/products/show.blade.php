@extends('products.layout')

@section('content')

<div class="container-fluid d-flex flex-row justify-content-between">
    <img src="/images/{{$product->image}}" width="300px">
    <div class="container d-flex flex-column">
        <p>{{$product->name}}
        <p>
        <p>{{$product->details}}</p>
    </div>
</div>


@endsection