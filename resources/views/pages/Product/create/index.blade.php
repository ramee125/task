@extends('layouts.app')

@section('page')
<div class="row h-100 justify-content-center">
    <div class="col-lg-5 align-self-center">
        <div class="card" style="margin-top:100px">
            <div class="card-body">
                <h1>New Product</h1>
                <form action="{{ route('products.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="inp-title">Title</label>
                        <input type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title" id="inp-title" aria-describedby="inp-title-helpId" required>
                        <small id="inp-title-helpId" class="form-text text-muted">Please enter the product title (3-5 characters).</small>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inp-price">Price</label>
                        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" placeholder="price" name="price" id="inp-price" aria-describedby="inp-price-helpId" required>
                        <small id="inp-price-helpId" class="form-text text-muted">Please enter the product price (numeric).</small>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inp-textarea">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="description" name="description" id="inp-textarea" aria-describedby="inp-textarea-helpId"></textarea>
                        <small id="inp-textarea-helpId" class="form-text text-muted">Please enter the product description (optional, at least 5 characters).</small>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




