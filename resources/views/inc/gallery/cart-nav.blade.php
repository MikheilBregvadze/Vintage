@section('content')
<div class="container">
        <div class="navigation">
            <div class="navbar nav-border">
                <b-tabs>
                    <b-tab title="Security" active>
                        @include('inc.gallery.cart')    
                    </b-tab>
                    <b-tab title="Profile">
                        @include('inc.gallery.profile')
                    </b-tab>
                    <b-tab title="Notifications">
                        @include('inc.gallery.notification')
                    </b-tab>
                </b-tabs>
            </div>
        </div>
    </div>    
@endsection