
@extends('public.layouts.main')
@push('pagetitle')
    404 
@endpush
    @section('content')
        <!-- Header End -->
        @include('public.includes.header')
        <!-- Header End -->
   
        <!-- 404 Start -->
        @include('public.includes.error')
        <!-- 404 End -->
     @endsection
        
