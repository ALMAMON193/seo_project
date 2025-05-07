<?php
$setting = \App\Models\SystemSetting::first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="@yield('author')" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset($setting->favicon ?? 'frontend/assets/images/avatar.png') }}">

    {{--====== CSS =========--}}
    @include('frontend.partials.styles')
</head>

<body>
<!-- =============================== Navbar Start Hare ========================= -->
@include('frontend.partials.header')
<!-- =============================== Navbar End Hare =========================== -->

<!-- =============================================== Main Start Hare ================================== -->
@yield('content')
<!-- =============================================== Main End Hare ================================== -->

<!-- ====================================== Footer Start Hare ====================== -->
@include('frontend.partials.footer')
<!-- ====================================== Footer End Hare ======================== -->

<!-- Javascript Links -->
@include('frontend.partials.scripts')


</body>

</html>
