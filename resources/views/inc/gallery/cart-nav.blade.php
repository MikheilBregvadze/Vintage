@section('content')
    <b-tabs>
        <b-tab active>
            {{-- @include('inc.gallery.home.cart')     --}}
        </b-tab>
        <b-tab title="Home" active>
            @include('inc.gallery.home.cart')    
        </b-tab>
        <b-tab title="Shop">
            @include('inc.gallery.shop.index')
        </b-tab>
        <b-tab title="Cafe Helmet">
            @include('inc.gallery.cafe-helmet.cafe-helmet')
        </b-tab>
    </b-tabs>
@endsection