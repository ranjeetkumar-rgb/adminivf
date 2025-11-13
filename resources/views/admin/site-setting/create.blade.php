@extends('admin-layouts.master')
@section('title')
    {{'Create Site Settings'}}
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
            Create Site Settings
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Site Settings</h4>
                    <p class="card-title-desc">Here you can create a new site settings for the application.</p>
                    <form action="{{ route('admin.site-settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Site Name</label>
                            <input type="text" name="site_name" class="form-control" value="{{ old('site_name') }}" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Email</label>
                            <input type="email" name="site_email" class="form-control" value="{{ old('site_email') }}" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Logo</label>
                            <input type="file" name="site_logo" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label>Site Favicon</label>
                            <input type="file" name="site_favicon" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label>Contact Phone</label>
                            <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Contact Address</label>
                            <textarea name="contact_address" class="form-control">{{ old('contact_address') }}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label>Facebook URL</label>
                            <input type="url" name="facebook_url" class="form-control" value="{{ old('facebook_url') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Twitter URL</label>
                            <input type="url" name="twitter_url" class="form-control" value="{{ old('twitter_url') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Instagram URL</label>
                            <input type="url" name="instagram_url" class="form-control" value="{{ old('instagram_url') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>YouTube URL</label>
                            <input type="url" name="youtube_url" class="form-control" value="{{ old('youtube_url') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>LinkedIn URL</label>
                            <input type="url" name="linkedin_url" class="form-control" value="{{ old('linkedin_url') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label>Copyright Text</label>
                            <input type="text" name="copyright_text" class="form-control" value="{{ old('copyright_text') }}">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
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

