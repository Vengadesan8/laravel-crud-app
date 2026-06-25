@extends('layouts.app')
@section('main')

 <div class="d-flex justify-content-between">
                <h5><i class="bi bi-journal-richtext">Product Details</i></h5>
                <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle" >New Product</i></a>
            </div>
            <div class="col-md-12 table-responsive mt-3">
                <table class="table table-borderd">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>M.R.P</th>
                        <th>Selling Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product )

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="products/{{ $product->image }}" style="width: 50px;
                                height:50px; object-fit:dontain" alt="Product" /></td>
                            <td><a href="products/{{$product->id}}/show" class="text-decoration-none">{{$product->name }}</a></td>
                            <td>₹{{ number_format($product->mrp) }}</td>
                            <td>₹{{ number_format($product->price) }}</td>
                            <td>
                                <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square">Edit</i></a>
                                <a href="products/{{$product->id}}/delete" onclick="return confirm('Are you sure want to Delete')" class="btn btn-danger btn-sm"><i class="bi bi-trash">Delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

@endsection
