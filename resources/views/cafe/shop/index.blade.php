@extends('layouts.app')
@section('content')
    <div class="container">	
        @include('cafe.cart-nav')
        <div class="container">
            <div>
                @include('cafe.shop.bikes')
                @include('cafe.shop.accessories')
                @include('cafe.shop.approval')
            </div>
        </div>
    </div>
@endsection
