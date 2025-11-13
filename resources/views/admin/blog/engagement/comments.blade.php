@extends('admin-layouts.master')
@section('title')
    {{'Comments Management'}}   
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Blog
        @endslot
        @slot('li_3')
            Engagement
        @endslot
        @slot('title')
            Comments Management
        @endslot
    @endcomponent

    <!-- Comment Stats Cards -->
    <div class="row">
        @if(isset($blog))
        <div class="col-12 mb-3">
            <div class="alert alert-info">
                <i class="fas fa-filter me-2"></i>
                <strong>Filtered by Blog:</strong> {{ $blog->title }}
                <a href="{{ route('admin.blog.engagement.comments') }}" class="btn btn-sm btn-outline-info ms-2">
                    <i class="fas fa-times me-1"></i>Clear Filter
                </a>
            </div>
        </div>
        @endif
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">
                                Total Comments
                                @if(isset($blog))
                                    <small class="text-muted">(for this blog)</small>
                                @endif
                            </p>
                            <h4 class="mb-0">{{ number_format($commentStats['total']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-primary-subtle">
                                <span class="avatar-title rounded-circle bg-primary text-white font-size-18">
                                    <i class="fas fa-comments"></i>
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
                            <p class="text-truncate font-size-14 mb-2">
                                Approved
                                @if(isset($blog))
                                    <small class="text-muted">(for this blog)</small>
                                @endif
                            </p>
                            <h4 class="mb-0 text-success">{{ number_format($commentStats['approved']) }}</h4>
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
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">
                                Pending
                                @if(isset($blog))
                                    <small class="text-muted">(for this blog)</small>
                                @endif
                            </p>
                            <h4 class="mb-0 text-warning">{{ number_format($commentStats['pending']) }}</h4>
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
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">
                                Replies
                                @if(isset($blog))
                                    <small class="text-muted">(for this blog)</small>
                                @endif
                            </p>
                            <h4 class="mb-0 text-info">{{ number_format($commentStats['replies']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-info-subtle">
                                <span class="avatar-title rounded-circle bg-info text-white font-size-18">
                                    <i class="fas fa-reply"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Comments Management
                        @if(isset($blog))
                            <small class="text-muted">- {{ $blog->title }}</small>
                        @endif
                    </h4>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-success btn-sm" onclick="bulkApprove(event)">
                            <i class="fas fa-check me-1"></i>Bulk Approve
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="bulkDelete(event)">
                            <i class="fas fa-trash me-1"></i>Bulk Delete
                        </button>
                        @if(isset($blog))
                            <a href="{{ route('admin.blog.engagement.comments') }}" class="btn btn-info btn-sm">
                                <i class="fas fa-list me-1"></i>Show All Comments
                            </a>
                        @endif
                        <a href="{{ route('admin.blog.engagement.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left me-1"></i>Back to Dashboard
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Filter Options -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <form method="GET" class="d-flex gap-2">
                                @if(isset($blog))
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                @endif
                                <select name="status" class="form-select" onchange="this.form.submit()">
                                    <option value="">All Status</option>
                                    <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form method="GET" class="d-flex gap-2">
                                @if(isset($blog))
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                @endif
                                @if(request('status'))
                                    <input type="hidden" name="status" value="{{ request('status') }}">
                                @endif
                                <input type="text" name="search" class="form-control" placeholder="Search comments..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <form id="bulk-action-form">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="select-all" class="form-check-input">
                                        </th>
                                        <th>Comment</th>
                                        <th>Blog</th>
                                        <th>User Details</th>
                                        <th>Status</th>
                                        <th>Likes</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comments as $comment)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="comment_ids[]" value="{{ $comment->id }}" 
                                                   class="form-check-input comment-checkbox">
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ Str::limit($comment->name, 20) }}</span>
                                                <small class="text-muted">{{ Str::limit($comment->comment, 50) }}</small>
                                                @if($comment->parent)
                                                    <small class="text-info">
                                                        <i class="fas fa-reply me-1"></i>Reply to: {{ Str::limit($comment->parent->name, 15) }}
                                                    </small>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ Str::limit($comment->blog->title, 25) }}</span>
                                                <small class="text-muted">{{ $comment->blog->category->name ?? 'No Category' }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ $comment->name }}</span>
                                                <small class="text-muted">{{ $comment->email }}</small>
                                                @if($comment->userProfile)
                                                    <div class="mt-2">
                                                        @if($comment->userProfile->phone)
                                                            <small class="text-info d-block">
                                                                <i class="fas fa-phone me-1"></i>{{ $comment->userProfile->phone }}
                                                            </small>
                                                        @endif
                                                        @if($comment->userProfile->location)
                                                            <small class="text-info d-block">
                                                                <i class="fas fa-map-marker-alt me-1"></i>{{ ucfirst($comment->userProfile->location) }}
                                                            </small>
                                                        @endif
                                                        @if($comment->userProfile->consultation_interest)
                                                            <small class="text-info d-block">
                                                                <i class="fas fa-calendar-check me-1"></i>
                                                                @if($comment->userProfile->consultation_interest == 'yes')
                                                                    <span class="text-success">Interested in consultation</span>
                                                                @elseif($comment->userProfile->consultation_interest == 'maybe')
                                                                    <span class="text-warning">Maybe interested</span>
                                                                @else
                                                                    <span class="text-muted">Not interested</span>
                                                                @endif
                                                            </small>
                                                        @endif
                                                        <small class="text-muted d-block">
                                                            <i class="fas fa-comments me-1"></i>{{ $comment->userProfile->total_comments }} total comments
                                                        </small>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if($comment->is_approved)
                                                <span class="badge bg-success">Approved</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-thumbs-up text-primary me-1"></i>
                                                <span class="fw-bold">{{ $comment->likes }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ $comment->created_at->format('M d, Y') }}</span>
                                                <small class="text-muted">{{ $comment->created_at->format('h:i A') }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                @if(!$comment->is_approved)
                                                    <button type="button" class="btn btn-sm btn-success" 
                                                            onclick="approveComment({{ $comment->id }})" title="Approve">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-sm btn-warning" 
                                                            onclick="rejectComment({{ $comment->id }})" title="Reject">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                @endif
                                                <button type="button" class="btn btn-sm btn-info" 
                                                        onclick="viewComment({{ $comment->id }})" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" 
                                                        onclick="deleteComment({{ $comment->id }})" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Showing {{ $comments->firstItem() ?? 0 }} to {{ $comments->lastItem() ?? 0 }} of {{ $comments->total() }} comments
                        </div>
                        <div>
                            {{ $comments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment Detail Modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentModalLabel">Comment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="commentModalBody">
                    <!-- Comment details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="approveBtn" style="display: none;">
                        <i class="fas fa-check me-1"></i>Approve
                    </button>
                    <button type="button" class="btn btn-warning" id="rejectBtn" style="display: none;">
                        <i class="fas fa-times me-1"></i>Reject
                    </button>
                    <button type="button" class="btn btn-danger" id="deleteBtn" style="display: none;">
                        <i class="fas fa-trash me-1"></i>Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    
    <script>
        let currentCommentId = null;

        // Select all functionality
        document.getElementById('select-all').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.comment-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Individual checkbox change
        document.querySelectorAll('.comment-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const allCheckboxes = document.querySelectorAll('.comment-checkbox');
                const checkedCheckboxes = document.querySelectorAll('.comment-checkbox:checked');
                const selectAllCheckbox = document.getElementById('select-all');
                
                selectAllCheckbox.checked = allCheckboxes.length === checkedCheckboxes.length;
            });
        });

        function approveComment(commentId) {
            if (confirm('Are you sure you want to approve this comment?')) {
                console.log('Approving comment:', commentId);
                fetch(`/admin/blog/engagement/comments/${commentId}/approve`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data);
                    if (data.success) {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert('Error: ' + (data.message || 'Unknown error occurred'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again. Error: ' + error.message);
                });
            }
        }

        function rejectComment(commentId) {
            if (confirm('Are you sure you want to reject this comment?')) {
                console.log('Rejecting comment:', commentId);
                fetch(`/admin/blog/engagement/comments/${commentId}/reject`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data);
                    if (data.success) {
                        alert(data.message);
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

        function deleteComment(commentId) {
            if (confirm('Are you sure you want to delete this comment? This action cannot be undone.')) {
                console.log('Deleting comment:', commentId);
                fetch(`/admin/blog/engagement/comments/${commentId}/delete`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data);
                    if (data.success) {
                        alert(data.message);
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

        function viewComment(commentId) {
            currentCommentId = commentId;
            
            // Find the comment row
            const commentRow = document.querySelector(`input[value="${commentId}"]`).closest('tr');
            if (!commentRow) {
                alert('Comment not found');
                return;
            }
            
            // Extract comment data from the table row
            const cells = commentRow.querySelectorAll('td');
            const commentCell = cells[1]; // Comment column
            const blogCell = cells[2]; // Blog column
            const authorCell = cells[3]; // Author column
            const statusCell = cells[4]; // Status column
            
            // Get comment text (the small text in comment cell)
            const commentText = commentCell.querySelector('small.text-muted').textContent;
            
            // Get author name (first span in author cell)
            const authorName = authorCell.querySelector('span.fw-bold').textContent;
            
            // Get author email (second small text in author cell)
            const authorEmail = authorCell.querySelector('small.text-muted').textContent;
            
            // Get blog title (from blog cell)
            const blogTitle = blogCell.querySelector('span.fw-bold').textContent;
            
            document.getElementById('commentModalBody').innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <strong>Author:</strong> ${authorName}
                    </div>
                    <div class="col-md-6">
                        <strong>Email:</strong> ${authorEmail}
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <strong>Blog:</strong> ${blogTitle}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <strong>Comment:</strong>
                        <p class="mt-2 p-3 bg-light rounded">${commentText}</p>
                    </div>
                </div>
            `;
            
            // Show appropriate action buttons based on approval status
            const isApproved = statusCell.querySelector('.badge').classList.contains('bg-success');
            document.getElementById('approveBtn').style.display = isApproved ? 'none' : 'inline-block';
            document.getElementById('rejectBtn').style.display = isApproved ? 'inline-block' : 'none';
            document.getElementById('deleteBtn').style.display = 'inline-block';
            
            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('commentModal'));
            modal.show();
        }

        function bulkApprove(event) {
            const selectedIds = getSelectedCommentIds();
            if (selectedIds.length === 0) {
                alert('Please select comments to approve.');
                return;
            }
            
            if (confirm(`Are you sure you want to approve ${selectedIds.length} comments?`)) {
                // Show loading state
                const button = event ? event.target : document.querySelector('button[onclick="bulkApprove()"]');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Processing...';
                button.disabled = true;
                
                fetch('/admin/blog/engagement/comments/bulk-approve', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ comment_ids: selectedIds })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert('Error: ' + (data.message || 'Unknown error occurred'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again. Error: ' + error.message);
                })
                .finally(() => {
                    // Reset button state
                    button.innerHTML = originalText;
                    button.disabled = false;
                });
            }
        }

        function bulkDelete(event) {
            const selectedIds = getSelectedCommentIds();
            if (selectedIds.length === 0) {
                alert('Please select comments to delete.');
                return;
            }
            
            if (confirm(`Are you sure you want to delete ${selectedIds.length} comments? This action cannot be undone.`)) {
                // Show loading state
                const button = event ? event.target : document.querySelector('button[onclick="bulkDelete()"]');
                const originalText = button.innerHTML;
                button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Processing...';
                button.disabled = true;
                fetch('/admin/blog/engagement/comments/bulk-delete', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ comment_ids: selectedIds })
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
                })
                .finally(() => {
                    // Reset button state
                    button.innerHTML = originalText;
                    button.disabled = false;
                });
            }
        }

        function getSelectedCommentIds() {
            const checkboxes = document.querySelectorAll('.comment-checkbox:checked');
            return Array.from(checkboxes).map(checkbox => parseInt(checkbox.value));
        }

        // Modal action buttons
        document.getElementById('approveBtn').addEventListener('click', function() {
            if (currentCommentId) {
                approveComment(currentCommentId);
            }
        });

        document.getElementById('rejectBtn').addEventListener('click', function() {
            if (currentCommentId) {
                rejectComment(currentCommentId);
            }
        });

        document.getElementById('deleteBtn').addEventListener('click', function() {
            if (currentCommentId) {
                deleteComment(currentCommentId);
            }
        });
    </script>
@endsection
