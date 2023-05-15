@extends('products.layout')

@section('content')
<div class="container d-flex flex-row justify-content-between">
    <h1>Products</h1>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$message}}
</div>
@endif
<div class="container-md d-flex justify-content-center">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <table class="table table-hove">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>


                @foreach($product as $item)


                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><img src="images/{{$item->image}}" alt="" style="width:200px; height:200px;"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->details}}</td>
                    <td>
                        <form action="{{route('products.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{route('products.show',$item->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('products.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $product->links() !!}

</div>
@endsection