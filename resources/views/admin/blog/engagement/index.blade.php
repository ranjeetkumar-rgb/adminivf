@extends('admin-layouts.master')
@section('title')
    {{'Blog Engagement Dashboard'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Blog
        @endslot
        @slot('title')
            Engagement Dashboard
        @endslot
    @endcomponent

    <!-- Engagement Stats Cards -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Total Blogs</p>
                            <h4 class="mb-0">{{ $engagementStats['total_blogs'] }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-primary-subtle">
                                <span class="avatar-title rounded-circle bg-primary text-white font-size-18">
                                    <i class="fas fa-blog"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Total Views</p>
                            <h4 class="mb-0">{{ number_format($engagementStats['total_views']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-info-subtle">
                                <span class="avatar-title rounded-circle bg-info text-white font-size-18">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Total Likes</p>
                            <h4 class="mb-0">{{ number_format($engagementStats['total_likes']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-danger-subtle">
                                <span class="avatar-title rounded-circle bg-danger text-white font-size-18">
                                    <i class="fas fa-heart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Total Comments</p>
                            <h4 class="mb-0">{{ number_format($engagementStats['total_comments']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-success-subtle">
                                <span class="avatar-title rounded-circle bg-success text-white font-size-18">
                                    <i class="fas fa-comments"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment Status Cards -->
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Approved Comments</p>
                            <h4 class="mb-0 text-success">{{ number_format($engagementStats['approved_comments']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-success-subtle">
                                <span class="avatar-title rounded-circle bg-success text-white font-size-18">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Pending Comments</p>
                            <h4 class="mb-0 text-warning">{{ number_format($engagementStats['pending_comments']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-warning-subtle">
                                <span class="avatar-title rounded-circle bg-warning text-white font-size-18">
                                    <i class="fas fa-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Comment Approval Rate</p>
                            <h4 class="mb-0 text-info">
                                @if($engagementStats['total_comments'] > 0)
                                    {{ number_format(($engagementStats['approved_comments'] / $engagementStats['total_comments']) * 100, 1) }}%
                                @else
                                    0%
                                @endif
                            </h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-info-subtle">
                                <span class="avatar-title rounded-circle bg-info text-white font-size-18">
                                    <i class="fas fa-percentage"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Top Performing Blogs -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Top Performing Blogs</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Blog Title</th>
                                    <th>Views</th>
                                    <th>Likes</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPerformingBlogs as $blog)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold">{{ Str::limit($blog->title, 25) }}</span>
                                            <small class="text-muted">{{ $blog->category->name ?? 'No Category' }}</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">{{ number_format($blog->views) }}</span></td>
                                    <td><span class="badge bg-danger">{{ number_format($blog->likes) }}</span></td>
                                    <td><span class="badge bg-success">{{ number_format($blog->comments_count) }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Comments -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Comment</th>
                                    <th>Blog</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentComments as $comment)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold">{{ Str::limit($comment->name, 15) }}</span>
                                            <small class="text-muted">{{ Str::limit($comment->comment, 30) }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        <small>{{ Str::limit($comment->blog->title, 20) }}</small>
                                    </td>
                                    <td>
                                        @if($comment->is_approved)
                                            <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $comment->created_at->format('M d') }}</small>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Engagement Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Engagement Overview</h4>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.blog.engagement.comments') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-comments me-1"></i>Manage Comments
                        </a>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left me-1"></i>Back to Blogs
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Blog Title</th>
                                    <th>Category</th>
                                    <th>Views</th>
                                    <th>Likes</th>
                                    <th>Comments</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold">{{ Str::limit($blog->title, 30) }}</span>
                                            <small class="text-muted">{{ Str::limit($blog->slug ?? '', 25) }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        @if($blog->category)
                                            <span class="badge bg-primary">{{ $blog->category->name }}</span>
                                        @else
                                            <span class="badge bg-secondary">No Category</span>
                                        @endif
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
                                            <span class="fw-bold">{{ number_format($blog->approved_comments ?? 0) }}</span>
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
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.blog.show', $blog->id) }}" 
                                               class="btn btn-sm btn-info" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.blog.engagement.comments', ['blog_id' => $blog->id]) }}" 
                                               class="btn btn-sm btn-success" title="Manage Comments">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" 
                                                        data-bs-toggle="dropdown" title="Reset">
                                                    <i class="fas fa-undo"></i>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Showing {{ $blogs->firstItem() ?? 0 }} to {{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() }} blogs
                        </div>
                        <div>
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
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
