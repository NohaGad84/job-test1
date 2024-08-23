@extends('public.layouts.main')
@push('pagetitle')
category
@endpush
@section('content')
        <!-- Header End -->
        @include('public.includes.header')
        <!-- Header End -->


        <!-- Category Start -->
        @include('public.includes.category1')
        <!-- Category End -->
 @endsection

       