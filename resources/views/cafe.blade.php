@extends('layouts.app')
@section('content')
    <div class="container">	
        <div class="navigation">
            <div class="navbar nav-border">
                @include('inc.gallery.cart-nav')
                @include('inc.gallery.home.cart')
            </div>
        </div>
    </div>
@endsection
