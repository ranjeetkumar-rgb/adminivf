@extends('admin-layouts.master')
@section('title')
    {{ 'View User' }}
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
            View FAQ
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FAQ Details</h4>
                    <p class="card-title-desc">Details of the FAQ in the application.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Question:</strong> {{ $faq->question }}</li>
                        <li class="list-group-item"><strong>Answer:</strong> {{ $faq->answer }}</li>
                    </ul>
                    @can('edit-faq')
                        <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-primary mt-3">Edit</a>
                    @endcan
                    <a href="{{ route('admin.faq.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection




