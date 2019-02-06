@extends('layouts.app')
@section('content')
    <div class="container">	
        @include('cafe.shop.shop-nav')
        <div class="container">
            <div>
                @include('cafe.shop.bikes')
                @include('cafe.shop.accessories')
                @include('cafe.shop.apparel')
            </div>
        </div>
    </div>
@endsection
