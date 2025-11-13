@extends('admin-layouts.master')
@section('title')
    {{'View Testimonial'}}
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
            View Testimonial
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Testimonial Details</h4>
                    <p class="card-title-desc ms-2">Details of the testimonial are as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $testimonial->name }}</li>
                        <li class="list-group-item"><strong>Designation:</strong> {{ $testimonial->designation }}</li>
                        <li class="list-group-item"><strong>Message:</strong> {{ $testimonial->message }}</li>
                        <li class="list-group-item"><strong>Image:</strong>
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Image" class="img-fluid" width="120">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </li>
                    </ul>
                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-primary mt-3">Edit</a>
                    <a href="{{ route('testimonial.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
