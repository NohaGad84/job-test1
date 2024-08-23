<!DOCTYPE html>
<html lang="en">
    
@include('public.includes.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('public.includes.spinner')
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('public.includes.navbar')
        <!-- Navbar End -->

@yield('content')



<!-- Footer Start -->
 @include('public.includes.footer')
<!-- Footer End -->

<!-- Back to Top -->
@include('public.includes.backtop')
    </div>
<!-- JavaScript Libraries -->
@include('public.includes.js')

</body>
</html>