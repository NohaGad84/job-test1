@extends('public.layouts.main')
@push('pagetitle')
    job-list 
@endpush
@section('content')
        <!-- Header End -->
        @include('public.includes.header')
        <!-- Header End -->

        <!-- Jobs Start -->
        @include('public.includes.job')
        <!-- Jobs End -->
@endsection

        