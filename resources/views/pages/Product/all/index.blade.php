@extends('layouts.app')

@section('page')
    <div class="row h-100 justify-content-center">
        <div class="col-lg-6 align-self-center">
            <div class="card" style="margin-top:100px">
                <div class="card-body">
                    <a href="{{ route('products.create') }}" class="btn btn-dark" style="float:right">new products</a>
                    <h1>All Product</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="row">{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="javascript:void(0)" onclick="deleteconfirm('{{ route('products.delete', $product->id) }}','product')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

