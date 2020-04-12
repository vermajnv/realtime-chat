@extends('front.layouts.app')

@section('content')
    <!-- Main Content Body Start -->
    <div class="main-content">
        @include('front.news.tranding')
        @include('front.advocate.tranding')
        @include('front.case.tranding')
    </div>
    <!-- Main Content Body End -->
    @include('front.includes.modal.signup')	
   	@include('front.includes.modal.signin')	
@endsection

@push('scripts')
    <script src="{{asset('js/front/search.js')}}"></script>
    <script src="{{asset('js/front/carousel.js')}}"></script>
    <script src="{{asset('js/front/signupForm.js')}}"></script>
@endpush
