@extends('frontend.layouts.master')

@section('content')

<div class="tm-home-img-container">
    <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
</div>

<section class="tm-section">
    <div class="container-fluid">
        @include('frontend.pages.home.introduction')
        @include('frontend.pages.home.section_2')
    </div>
</section>

@endsection