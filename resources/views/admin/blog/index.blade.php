@extends('admin-layouts.master')
@section('title')
    {{'Blog Management'}}
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
            Blog
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
                        <h4 class="card-title">Manage Blog</h4>
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-success ms-auto">Add Blog</a>
                    </div>
                    <p class="card-title-desc ms-2">Here you can manage all the blogs of the application.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Views</th>
                                <th scope="col">Likes</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Status</th>
                                <th scope="col">Published</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row">{{ $blog->id }}</th>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold">{{ Str::limit($blog->title, 30) }}</span>
                                            <small class="text-muted">{{ Str::limit($blog->slug ?? '', 25) }}</small>
                                        </div>
                                    </td>
                                    {{-- This is the code for your table cell --}}
                                    <td>
                                        {{-- This loop checks the $blog->categories accessor --}}
                                        @forelse($blog->categories as $category)
                                            {{-- It will loop and show a badge for every category --}}
                                            <span class="badge bg-primary">{{ $category->name }}</span>
                                        @empty
                                            {{-- This will show if the blog has no categories --}}
                                            <span class="badge bg-secondary">No Category</span>
                                        @endforelse
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-eye text-info me-1"></i>
                                            <span class="fw-bold">{{ number_format($blog->views ?? 0) }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-heart text-danger me-1"></i>
                                            <span class="fw-bold">{{ number_format($blog->likes ?? 0) }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-comments text-success me-1"></i>
                                            <span class="fw-bold">{{ number_format($blog->comments_count ?? 0) }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        @if($blog->published)
                                            <span class="badge bg-success">Published</span>
                                        @else
                                            <span class="badge bg-warning">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($blog->published_at)
                                            <small class="text-muted">{{ $blog->published_at->format('M d, Y') }}</small>
                                        @else
                                            <small class="text-muted">Not published</small>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.blog.show', $blog->id) }}"
                                               class="btn btn-sm btn-info" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                               class="btn btn-sm btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" title="Engagement">
                                                    <i class="fas fa-chart-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"
                                                           onclick="resetLikes({{ $blog->id }})">
                                                        <i class="fas fa-heart-broken me-2"></i>Reset Likes
                                                    </a></li>
                                                    <li><a class="dropdown-item" href="#"
                                                           onclick="resetViews({{ $blog->id }})">
                                                        <i class="fas fa-eye-slash me-2"></i>Reset Views
                                                    </a></li>
                                                    <li><a class="dropdown-item" href="{{ route('admin.blog.engagement.comments', ['blog_id' => $blog->id]) }}">
                                                        <i class="fas fa-comments me-2"></i>Manage Comments
                                                    </a></li>
                                                </ul>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete"
                                                    onclick="deleteConfirm('{{ $blog->title }}', event, this, '{{ route('admin.blog.destroy', $blog->id) }}')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script>
        function resetLikes(blogId) {
            if (confirm('Are you sure you want to reset likes for this blog?')) {
                fetch(`/admin/blog/${blogId}/reset-likes`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
            }
        }

        function resetViews(blogId) {
            if (confirm('Are you sure you want to reset views for this blog?')) {
                fetch(`/admin/blog/${blogId}/reset-views`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
            }
        }
    </script>
@endsection

