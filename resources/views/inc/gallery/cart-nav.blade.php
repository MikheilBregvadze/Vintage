<ul class="row align-items-center m-0">
    <li><a class="circleLink" href="javascript:void(0)"><i class="fas fa-home"></i></a></li>
    <li><a class="linkAfter" href="javascript:void(0)">Home</a></li>
    <li><a class="linkAfter" href="#!">Shop</a></li>
    <li><a class=" linkAfterLast" href="javascript:void(0)">Your Card</a></li>
</ul>

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
                        {{-- @include('profile.user.notifications') --}}
                    </b-tab>
                </b-tabs>
            </div>
        </div>
    </div>    
@endsection