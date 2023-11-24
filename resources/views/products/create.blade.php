@extends('layouts.app')

@section('title', 'Create Artikel')

@section('contents')
    <h1 class="mb-0">Add Artikel</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="author">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="category">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="descriptoin"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
