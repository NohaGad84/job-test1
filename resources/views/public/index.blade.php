@extends('public.layouts.main')

@section('content')
    

        <!-- Carousel Start -->
        @include('public.includes.carousel')
        <!-- Carousel End -->



        <!-- Search Start -->
        @include('public.includes.search')
        <!-- Search End -->



        <!-- Category Start -->
       @include('public.includes.category')
        <!-- Category End -->



        <!-- About Start -->
        @include('public.includes.start')
        <!-- About End -->



        <!-- Jobs Start -->
        @include('public.includes.job')
        <!-- Jobs End -->


        <!-- Testimonial Start -->
        @include('public.includes.test')
        <!-- Testimonial End -->
     @endsection

        