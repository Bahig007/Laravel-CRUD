@extends('products.layout')

@section('content')

<div class="container d-flex flex-row justify-content-between">
    <h1>Add Product</h1>
</div>

@if ($errors->any())
<div class="alert alert-success" role="alert">
    <ul>

        @foreach ($error->any() as $item)
        <li>{{$item}}</li>
        @endforeach

    </ul>
</div>
@endif

<div class="container">

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" id="details" rows="3" name="details"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection