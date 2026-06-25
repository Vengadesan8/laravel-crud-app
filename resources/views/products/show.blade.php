@extends('layouts.app')

@section('main')

<h5><i class="bi bi-pencil-square"></i> Details</h5>

<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">
            View Product
        </li>
    </ol>
</nav>

<div class="card p-4">
    <div class="row">

        <div class="col-md-10 text-center">
            <img src="/products/{{ $product->image }}"
                 alt="{{ $product->name }}"
                 class="img-fluid rounded"
                 style="max-height:350px;">
        </div>

        <div class="col-md-8 ">

            <h2 class="fw-bold">
                {{ $product->name }}
            </h2>
            
            <div class="mt-3" style="white-space: pre-line;">
                 {{ $product->description }}
            </div>

            <p class="mt-4 fs-5">
                <strong>M.R.P :</strong>

                <span class="text-danger text-decoration-line-through">
                    ₹{{ number_format($product->mrp) }}
                </span>
            </p>

            <p class="fs-4">
                <strong>Selling Price :</strong>

                <span class="text-success fw-bold">
                    ₹{{ number_format($product->price) }}
                </span>
            </p>

            <p class="text-success">
                You Save ₹{{ number_format($product->mrp - $product->price) }}
            </p>

        </div>

    </div>
</div>

@endsection