@extends('layouts.app')

@section('page')
<div class="row h-100 justify-content-center">
    <div class="col-lg-5 align-self-center">
        <div class="card" style="margin-top:100px">
            <div class="card-body">
                <h1>show Product</h1>
                <ul>
                    <li>Title: <strong>{{$products->title}}</strong></li>
                    <li>price: <strong>{{$products->price}}</strong></li>
                    <li>Description: <strong>{{$products->description}}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection




