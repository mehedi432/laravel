@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mt-3 card-outline card-secondary">
            <div class="card-header">
                প্রোডাক্ট সমূহ
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="overflow-x: auto">
                        <table class="table" id="product_list_table">
                            <thead>
                              <tr>
                                <th># ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Sell Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Details</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->sell_price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td><img src="uploads/{{$product->image}}" alt="" srcset="" style="width:55px" class="img-thumbnail"></td>
                                        <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-block btn-outline-secondary">Edit</a></td>
                                        <td>
                                            {!! Form::open(['route' => ['product.destroy', $product->id], 'method' => 'delete']) !!}
                                                {{Form::submit('Delete', ['type' => 'submit', 'class' => 'btn btn-block btn-outline-secondary'])}}
                                            {!! Form::close() !!}
                                        </td>
                                        <td><a href="{{route('product.show', $product->id)}}" class="btn btn-block btn-outline-secondary">Details</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready( function () {
        $('product_list_table').DataTable();
    });
</script>

