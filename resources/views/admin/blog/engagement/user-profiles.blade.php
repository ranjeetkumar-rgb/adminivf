@extends('admin-layouts.master')
@section('title')
    {{'User Profiles Management'}}
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
            User Profiles Management
        @endslot
    @endcomponent

    <!-- User Profile Stats Cards -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-1 overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Total Users</p>
                            <h4 class="mb-0">{{ number_format($userStats['total']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-primary-subtle">
                                <span class="avatar-title rounded-circle bg-primary text-white font-size-18">
                                    <i class="fas fa-users"></i>
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
                            <p class="text-truncate font-size-14 mb-2">Consultation Interested</p>
                            <h4 class="mb-0 text-success">{{ number_format($userStats['consultation_yes']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-success-subtle">
                                <span class="avatar-title rounded-circle bg-success text-white font-size-18">
                                    <i class="fas fa-calendar-check"></i>
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
                            <p class="text-truncate font-size-14 mb-2">Active Commenters</p>
                            <h4 class="mb-0 text-info">{{ number_format($userStats['active_commenters']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-info-subtle">
                                <span class="avatar-title rounded-circle bg-info text-white font-size-18">
                                    <i class="fas fa-comment-dots"></i>
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
                            <h4 class="mb-0 text-warning">{{ number_format($userStats['total_comments']) }}</h4>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="avatar-sm rounded-circle bg-warning-subtle">
                                <span class="avatar-title rounded-circle bg-warning text-white font-size-18">
                                    <i class="fas fa-comments"></i>
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
                    <h4 class="card-title">User Profiles</h4>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.blog.engagement.comments') }}" class="btn btn-info btn-sm">
                            <i class="fas fa-comments me-1"></i>View Comments
                        </a>
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
                                <select name="consultation_interest" class="form-select" onchange="this.form.submit()">
                                    <option value="">All Consultation Interest</option>
                                    <option value="yes" {{ request('consultation_interest') == 'yes' ? 'selected' : '' }}>Interested</option>
                                    <option value="maybe" {{ request('consultation_interest') == 'maybe' ? 'selected' : '' }}>Maybe</option>
                                    <option value="no" {{ request('consultation_interest') == 'no' ? 'selected' : '' }}>Not Interested</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form method="GET" class="d-flex gap-2">
                                @if(request('consultation_interest'))
                                    <input type="hidden" name="consultation_interest" value="{{ request('consultation_interest') }}">
                                @endif
                                <input type="text" name="search" class="form-control" placeholder="Search users..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Contact Info</th>
                                    <th>Location</th>
                                    <th>Consultation Interest</th>
                                    <th>Comments</th>
                                    <th>First Comment</th>
                                    <th>Last Comment</th>
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userProfiles as $profile)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold">{{ $profile->name }}</span>
                                            <small class="text-muted">{{ $profile->email }}</small>
                                        </div>
                                    </td>
                                    <td>
                                        @if($profile->phone)
                                            <small class="text-info d-block">
                                                <i class="fas fa-phone me-1"></i>{{ $profile->phone }}
                                            </small>
                                        @else
                                            <small class="text-muted">No phone provided</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($profile->location)
                                            <span class="badge bg-light text-dark">
                                                <i class="fas fa-map-marker-alt me-1"></i>{{ ucfirst($profile->location) }}
                                            </span>
                                        @else
                                            <small class="text-muted">Not specified</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($profile->consultation_interest == 'yes')
                                            <span class="badge bg-success">Interested</span>
                                        @elseif($profile->consultation_interest == 'maybe')
                                            <span class="badge bg-warning">Maybe</span>
                                        @elseif($profile->consultation_interest == 'no')
                                            <span class="badge bg-secondary">Not Interested</span>
                                        @else
                                            <small class="text-muted">Not specified</small>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-comments text-primary me-1"></i>
                                            <span class="fw-bold">{{ $profile->total_comments }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        @if($profile->first_comment_at)
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ $profile->first_comment_at->format('M d, Y') }}</span>
                                                <small class="text-muted">{{ $profile->first_comment_at->format('h:i A') }}</small>
                                            </div>
                                        @else
                                            <small class="text-muted">-</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($profile->last_comment_at)
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold">{{ $profile->last_comment_at->format('M d, Y') }}</span>
                                                <small class="text-muted">{{ $profile->last_comment_at->format('h:i A') }}</small>
                                            </div>
                                        @else
                                            <small class="text-muted">-</small>
                                        @endif
                                    </td>
                                    <!-- <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-sm btn-info" 
                                                    onclick="viewUserProfile({{ $profile->id }})" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" 
                                                    onclick="viewUserComments({{ $profile->id }})" title="View Comments">
                                                <i class="fas fa-comments"></i>
                                            </button>
                                        </div>
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Showing {{ $userProfiles->firstItem() ?? 0 }} to {{ $userProfiles->lastItem() ?? 0 }} of {{ $userProfiles->total() }} users
                        </div>
                        <div>
                            {{ $userProfiles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Profile Detail Modal -->
    <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userProfileModalLabel">User Profile Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="userProfileModalBody">
                    <!-- User profile details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    
    <script>
        function viewUserProfile(profileId) {
            // This would load user profile details via AJAX
            // For now, we'll show a placeholder
            document.getElementById('userProfileModalBody').innerHTML = `
                <div class="text-center py-4">
                    <i class="fas fa-spinner fa-spin fa-2x text-primary mb-3"></i>
                    <p>Loading user profile details...</p>
                </div>
            `;
            
            const modal = new bootstrap.Modal(document.getElementById('userProfileModal'));
            modal.show();
        }

        function viewUserComments(profileId) {
            // Redirect to comments page filtered by this user
            window.location.href = `{{ route('admin.blog.engagement.comments') }}?user_profile_id=${profileId}`;
        }
    </script>
@endsection
