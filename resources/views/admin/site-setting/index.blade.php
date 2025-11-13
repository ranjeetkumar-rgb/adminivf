@extends('admin-layouts.master')
@section('title')
   {{'Site Settings'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
             Site Settings
        @endslot
    @endcomponent
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Site Settings</h4>               
                        <!-- <a href="{{ route('admin.site-settings.create') }}" class="btn btn-success ms-auto">Add Site Settings</a> -->
                    </div>
                    <p class="card-title-desc ms-2">Here you can manage the site settings of the application.</p>
                    <div class="table-responsive">
                    @if($siteSetting)
                        <table class="table table-bordered">
                            <tr>
                                <th>Site Name</th>
                                <td>{{ $siteSetting->site_name }}</td>
                            </tr>
                            <tr>
                                <th>Site Email</th>
                                <td>{{ $siteSetting->site_email }}</td>
                            </tr>
                            <tr>
                                <th>Site Logo</th>
                                <td>
                                    @if($siteSetting->site_logo)
                                        @php
                                            $logoPath = 'storage/' . $siteSetting->site_logo;
                                            $fullLogoPath = public_path($logoPath);
                                        @endphp
                                        @if(file_exists($fullLogoPath))
                                            <img src="{{ asset($logoPath) }}" height="40" alt="Site Logo" class="img-thumbnail">
                                        @else
                                            <div class="text-muted">
                                                <i class="fas fa-exclamation-triangle text-warning"></i>
                                                Image file not found: {{ $siteSetting->site_logo }}
                                            </div>
                                        @endif
                                    @else
                                        <span class="text-muted">No logo uploaded</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Site Favicon</th>
                                <td>
                                    @if($siteSetting->site_favicon)
                                        @php
                                            $faviconPath = 'storage/' . $siteSetting->site_favicon;
                                            $fullFaviconPath = public_path($faviconPath);
                                        @endphp
                                        @if(file_exists($fullFaviconPath))
                                            <img src="{{ asset($faviconPath) }}" height="24" alt="Site Favicon" class="img-thumbnail">
                                        @else
                                            <div class="text-muted">
                                                <i class="fas fa-exclamation-triangle text-warning"></i>
                                                Image file not found: {{ $siteSetting->site_favicon }}
                                            </div>
                                        @endif
                                    @else
                                        <span class="text-muted">No favicon uploaded</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Contact Phone</th>
                                <td>{{ $siteSetting->contact_phone }}</td>
                            </tr>
                            <tr>
                                <th>Contact Address</th>
                                <td>{{ $siteSetting->contact_address }}</td>
                            </tr>
                            <tr>
                                <th>Facebook URL</th>
                                <td>
                                    @if($siteSetting->facebook_url)
                                        <a href="{{ $siteSetting->facebook_url }}" target="_blank">{{ $siteSetting->facebook_url }}</a>
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Twitter URL</th>
                                <td>
                                    @if($siteSetting->twitter_url)
                                        <a href="{{ $siteSetting->twitter_url }}" target="_blank">{{ $siteSetting->twitter_url }}</a>
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Instagram URL</th>
                                <td>
                                    @if($siteSetting->instagram_url)
                                        <a href="{{ $siteSetting->instagram_url }}" target="_blank">{{ $siteSetting->instagram_url }}</a>
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>YouTube URL</th>
                                <td>
                                    @if($siteSetting->youtube_url)
                                        <a href="{{ $siteSetting->youtube_url }}" target="_blank">{{ $siteSetting->youtube_url }}</a>
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>LinkedIn URL</th>
                                <td>
                                    @if($siteSetting->linkedin_url)
                                        <a href="{{ $siteSetting->linkedin_url }}" target="_blank">{{ $siteSetting->linkedin_url }}</a>
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Copyright Text</th>
                                <td>{{ $siteSetting->copyright_text }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    @can('edit-site-settings')
                                        <a href="{{ route('admin.site-settings.edit', $siteSetting->id) }}" class="btn btn-warning">Edit</a>
                                    @endcan
                                    @can('delete-site-settings')
                                        <button type="button" class="btn btn-danger" onclick="deleteConfirm('Site Setting', event, this, '{{ route('admin.site-settings.destroy', $siteSetting->id) }}')">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        </table>
                        @else
                            <p>No site settings found. <a href="{{ route('admin.site-settings.create') }}">Create now</a>.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

