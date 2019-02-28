@extends('layouts.main')

@section('content')
<home-page inline-template>
	<div>
		@include('homePage.header')
		@include('homePage.header-block')
		@include('homePage.block1')
		@include('homePage.block2')
		@include('homePage.block3')
		@include('homePage.block4')
		@include('homePage.block5')
		@include('homePage.block6')
		@include('homePage.footer')
	</div>
</home-page>
@include('modals.login')
@include('modals.register')
@include('modals.forget-password')
@include('modals.reset-password')
@endsection
