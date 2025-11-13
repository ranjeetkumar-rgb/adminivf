<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | {{ $globalSettings->site_name ?? 'IndiaIVF' }} - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="{{ $globalSettings->site_name ?? 'IndiaIVF' }} - Admin & Dashboard Template" name="description" />
        <meta content="{{ $globalSettings->site_name ?? 'Themesdesign' }}" name="author" />
        <!-- App favicon -->
        @if($globalSettings && $globalSettings->site_favicon)
            <link rel="shortcut icon" href="{{ asset('storage/' . $globalSettings->site_favicon) }}">
        @else
            <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @endif
        @include('admin-layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('admin-layouts.vendor-scripts')
    </body>
</html>
