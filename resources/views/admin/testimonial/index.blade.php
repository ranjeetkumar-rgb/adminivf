@extends('admin-layouts.master')
@section('title')
    {{'Testimonials'}}
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
            Testimonials
        @endslot
    @endcomponent
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Manage Testimonials</h4>
                        <a href="{{ route('testimonial.create') }}" class="btn btn-success ms-auto">Add Testimonial</a>
                    </div>
                    <p class="card-title-desc ms-2">Here you can manage all the testimonials of the application.</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Message</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ Str::limit($testimonial->message, 50) }}</td>
                                        <td>
                                            @if($testimonial->image)
                                                <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                                     alt="{{ $testimonial->name }}" 
                                                     width="60" 
                                                     height="60" 
                                                     class="img-thumbnail"
                                                     loading="lazy">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('testimonial.show', $testimonial->id) }}" 
                                                   class="btn btn-sm btn-info" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('testimonial.edit', $testimonial->id) }}" 
                                                   class="btn btn-sm btn-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" title="Delete" 
                                                        onclick="deleteConfirm('{{ $testimonial->name }}', event, this, '{{ route('testimonial.destroy', $testimonial->id) }}')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No testimonials found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
