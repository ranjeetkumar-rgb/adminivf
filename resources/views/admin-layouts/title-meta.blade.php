<meta charset="utf-8" />
<title>@@title | {{ $globalSettings->site_name ?? 'IndiaIVF' }} - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="{{ $globalSettings->site_name ?? 'IndiaIVF' }} - Admin & Dashboard Template" name="description" />
<meta content="{{ $globalSettings->site_name ?? 'Themesdesign' }}" name="author" />
<!-- App favicon -->
@if($globalSettings && $globalSettings->site_favicon)
    <link rel="shortcut icon" href="{{ asset('storage/' . $globalSettings->site_favicon) }}">
@else
    <link rel="shortcut icon" href="assets/images/favicon.ico">
@endif

<!-- Schema.org structured data -->
@if(isset($schema))
    <x-schema :schema="$schema" />
@endif
