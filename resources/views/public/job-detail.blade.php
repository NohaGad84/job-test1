@extends('public.layouts.main')
@push('pagetitle')
    job-details 
@endpush
@section('content')
        <!-- Header End -->
        @include('public.includes.header')
        <!-- Header End -->
 
        <!-- Job Detail Start -->
       @include('public.includes.job-details')
        <!-- Job Detail End -->
 @endsection

 

       