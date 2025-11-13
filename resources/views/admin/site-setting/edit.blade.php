@extends('admin-layouts.master')
@section('title')
    {{'Edit Site Settings'}}
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
            Edit Site Settings
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Site Settings</h4>
                    <p class="card-title-desc">Here you can edit the site settings for the application.</p>
                    <form action="{{ route('admin.site-settings.update', $siteSetting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label>Site Name</label>
                            <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $siteSetting->site_name) }}" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Email</label>
                            <input type="email" name="site_email" class="form-control" value="{{ old('site_email', $siteSetting->site_email) }}" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Logo</label>
                            <input type="file" name="site_logo" class="form-control">
                            @if($siteSetting->site_logo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$siteSetting->site_logo) }}" alt="Current Logo" height="50">
                                </div>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Favicon</label>
                            <input type="file" name="site_favicon" class="form-control">
                            @if($siteSetting->site_favicon)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$siteSetting->site_favicon) }}" alt="Current Favicon" height="32">
                                </div>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label>Contact Phone</label>
                            <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $siteSetting->contact_phone) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>WhatsApp Number</label>
                            <input type="text" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', $siteSetting->whatsapp_number) }}" placeholder="+91 1234567890">
                            <small class="form-text text-muted">Enter WhatsApp number with country code (e.g., +91 1234567890)</small>
                        </div>
                        <div class="form-group mb-2">
                            <label>Contact Address</label>
                            <textarea name="contact_address" class="form-control">{{ old('contact_address', $siteSetting->contact_address) }}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label>Facebook URL</label>
                            <input type="url" name="facebook_url" class="form-control" value="{{ old('facebook_url', $siteSetting->facebook_url) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Twitter URL</label>
                            <input type="url" name="twitter_url" class="form-control" value="{{ old('twitter_url', $siteSetting->twitter_url) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Instagram URL</label>
                            <input type="url" name="instagram_url" class="form-control" value="{{ old('instagram_url', $siteSetting->instagram_url) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>YouTube URL</label>
                            <input type="url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $siteSetting->youtube_url) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>LinkedIn URL</label>
                            <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url', $siteSetting->linkedin_url) }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Copyright Text</label>
                            <input type="text" name="copyright_text" class="form-control" value="{{ old('copyright_text', $siteSetting->copyright_text) }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('admin.site-settings.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
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

